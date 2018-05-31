<?php

namespace App\Http\Controllers;

use App\Exposure;
use View;
use File;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;

class ExposureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function index() {

        $tickets = Exposure::all();
        return view('exposures.index', compact('tickets'));
    }

    public function show(Exposure $expo) {

        return view('exposures.show', compact('expo'));
    }

    public function create() {

        $ticket_num = request('ticket_num');

        //Queries to get company info from Sedona Server
        if($svc = DB::connection('sqlsrv')->table('dbo.SV_Service_Ticket')->select('Ticket_Number', 'Customer_Site_Id', 'Customer_Id', 'Creation_Date')->where('Ticket_Number', $ticket_num)->first()) {
            $bus = DB::connection('sqlsrv')->table('dbo.AR_Customer_Site')->select('Business_Name', 'GE1_Description', 'GE2_Short')->where('Customer_Site_Id', $svc->Customer_Site_Id)->first();
            $site_contact = DB::connection('sqlsrv')->table('dbo.AR_Site_Contact')->select('Contact_Id')->where('Site_Id', $svc->Customer_Site_Id)->latest('Site_Contact_Id')->first();
            $contact = DB::connection('sqlsrv')->table('dbo.AR_Customer_Contact')->select('Contact_Name', 'Phone')->where('Customer_Contact_Id', $site_contact->Contact_Id)->first();
            $alarm = DB::connection('sqlsrv')->table('dbo.AR_Customer_System')->select('Alarm_Account')->where('Customer_Site_Id', $svc->Customer_Site_Id)->first();
            $sq_ft = DB::connection('sqlsrv')->table('dbo.EGD_Footage')->select('footage')->where('customer_id', $svc->Customer_Id)->first();
            $cust_num = DB::connection('sqlsrv')->table('dbo.AR_Customer')->select('Customer_Number')->where('customer_id', $svc->Customer_Id)->first();

            $bus_tmp = substr($bus->Business_Name, 0, strpos($bus->Business_Name, "*"));
            $bus_name = trim($bus_tmp);

            $ticket_type = request('ticket_type');
            return view('exposures.create', compact('ticket_num', 'ticket_type', 'svc', 'bus', 'alarm', 'bus_name', 'sq_ft', 'cust_num', 'sys_options', 'contact'));
        }
        else {
            return view('exposures.create', compact('sys_options'));
        }
    }

    public function store() {

        $expo = new Exposure;
        
        //dd($zone);

        //Convert data uri to image file
        $data_uri = request('sig_img');
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);

        //Create directory for img uploads
        $img_name = 'expo_sig.jpg';
        $dest = '/public/' . request('ticket_num');

        if(!File::isDirectory($dest)) {
            Storage::makeDirectory($dest);
        }

        $img_dest = $dest . '/' . $img_name;

        Storage::put($img_dest, $decoded_image);

        Exposure::create([
            'ticket_num' => request('ticket_num'),
            'visit_date' => request('visit_date'),
            'acct_num' => request('acct_num'),
            'arrive_time' => request('arrive_time'),
            'serv_tech' => request('serv_tech'),
            'depart_time' => request('depart_time'),
            'cust_name' => request('cust_name'),
            'city' => request('city'),
            'state' => request('state'),
            'contact' => request('contact'),
            'phone' => request('phone'),
            'expo_name' => request('expo_name'),
            'expo_phone' => request('expo_phone'),
            'expo_date' => request('expo_date'),
            'expo_time' => request('expo_time'),
            'med_att' => request('med_att'),
            'workman' => request('workman'),
            'desc_expo' => request('desc_expo'),
            'wit_info' => request('wit_info'),
            'cond' => request('cond'),
            'assess' => request('assess'),
            'add_comm' => request('add_comm'), 
            'fence_depart' => request('fence_depart'),
            'tt' => request('tt'),

        ]);

        $ticket_num = request('ticket_num');
        $type = 'exposure';
        
        return redirect('/tickets/create')->with(compact('ticket_num'));
    }

    public function download(Exposure $expo) {
        $ticknum = $expo->ticket_num;
        $tickname = $ticknum . '_expo.pdf';
        $file = storage_path() . '/app/public/' . $ticknum . '/' . $tickname;
        //dd($file);

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, $tickname, $headers);
    }
}

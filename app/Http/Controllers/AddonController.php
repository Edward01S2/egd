<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addon;
use View;
use File;
use Response;
use Illuminate\Support\Facades\Storage;
use DB;

class AddonController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function index() {

        $tickets = Addon::all();
        return view('addons.index', compact('tickets'));
    }

    public function show(Addon $addon) {

        return view('addons.show', compact('addon'));
    }

    public function create() {
        $qual_options = array("Choose Rank", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

        $ticket_num = request('ticket_num');

            //Queries to get company info from Sedona Server
        if($svc = DB::connection('sqlsrv_final')->table('dbo.SV_Service_Ticket')->select('Ticket_Number', 'Customer_Site_Id')->where('Ticket_Number', $ticket_num)->first()) {
            $bus = DB::connection('sqlsrv_final')->table('dbo.AR_Customer_Site')->select('Business_Name', 'GE1_Description', 'GE2_Short')->where('Customer_Site_Id', $svc->Customer_Site_Id)->first();
            $alarm = DB::connection('sqlsrv_final')->table('dbo.AR_Customer_System')->select('Alarm_Account')->where('Customer_Site_Id', $svc->Customer_Site_Id)->first();
            //dd($alarm);

            $bus_tmp = substr($bus->Business_Name, 0, strpos($bus->Business_Name, "*"));
            $bus_name = trim($bus_tmp);
            //dd($bus_trim);          

            return view('addons.create', compact('ticket_num', 'qual_options', 'svc', 'bus', 'alarm', 'bus_name'));
        }
        else {
            return view('addons.create', compact('qual_options'));
        }
    }

    public function store() {

        $addon = new Addon;
        
        //dd($zone);

        //Convert data uri to image file
        $data_uri = request('sig_img');
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);

        //Create directory for img uploads
        $img_name = 'addon_sig.jpg';
        $dest = '/public/' . request('ticket_num');

        if(!File::isDirectory($dest)) {
            Storage::makeDirectory($dest);
        }

        $img_dest = $dest . '/' . $img_name;

        Storage::put($img_dest, $decoded_image);

        Addon::create([
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
            'foot_up' => request('foot_up'),
            'single_up' => request('single_up'),
            'dbl_up' => request('dbl_up'),
            'gates' => request('gates'),
            'elec_add' => request('elec_add'),
            'foot_down' => request('foot_down'),
            'single_down' => request('single_down'),
            'dbl_down' => request('dbl_down'),
            'gate_down' => request('gate_down'),
            'elec_move' => request('elec_move'),
            'trench_foot' => request('trench_foot'),
            'pvc_foot' => request('pvc_foot'),
            'saw_foot' => request('saw_foot'),
            'total_man' => request('total_man'),
            'comments' => request('comments'),
            'check1' => request('check1'),
            'check2' => request('check2'),
            'check3' => request('check3'),
            'check4' => request('check4'),
            'check5' => request('check5'),
            'check6' => request('check6'),
            'check7' => request('check7'),
            'check8' => request('check8'),
            'check9' => request('check9'),
            'check10' => request('check10'),
            'check11' => request('check11'),
            'check12' => request('check12'),
            'check13' => request('check13'),
            'check14' => request('check14'),
            'check15' => request('check15'),
            'check16' => request('check16'),
            'check17' => request('check17'),
            'check18' => request('check18'),
            'check19' => request('check19'),
            'addon1' => request('addon1'),
            'addon2' => request('addon2'),
            'addon3' => request('addon3'),
            'addon4' => request('addon4'),
            'addon5' => request('addon5'),
            'addon6' => request('addon6'),
            'addon7' => request('addon7'),
            'addon8' => request('addon8'),
            'addon9' => request('addon9'),
            'addon10' => request('addon10'),
            'addon11' => request('addon11'),
            'stname' => request('stname'),
            'customer' => request('customer'),
            'tt' => request('tt'),
        ]);

        $ticket_num = request('ticket_num');
        $type = 'addon';
        
        return redirect('/complete')->with(compact('ticket_num', 'type'));
    }

    public function download(Addon $addon) {
        $ticknum = $addon->ticket_num;
        $tickname = $ticknum . '_addon.pdf';
        $file = storage_path() . '/app/public/' . $ticknum . '/' . $tickname;
        //dd($file);

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, $tickname, $headers);
    }
}

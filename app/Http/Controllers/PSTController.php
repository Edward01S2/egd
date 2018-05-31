<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PST;
use Response;
use DB;

class PSTController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function index() {

        $pst = PST::all();
        return view('pst.index', compact('pst'));
    }

    public function show(PST $pst) {

        $sys_options = array("Initial Installation Check", "Add-on Check");

        return view('pst.show', compact('pst', 'sys_options'));
    }

    public function create() {

        $sys_options = array("Initial Installation Check", "Add-on Check");

        $ticket_num = request('ticket_num');

        //Queries to get company info from Sedona Server
        if($svc = DB::connection('sqlsrv')->table('dbo.SV_Service_Ticket')->select('Ticket_Number', 'Customer_Site_Id', 'Customer_Id', 'Creation_Date')->where('Ticket_Number', $ticket_num)->first()) {
            $bus = DB::connection('sqlsrv')->table('dbo.AR_Customer_Site')->select('Business_Name', 'GE1_Description', 'GE2_Short')->where('Customer_Site_Id', $svc->Customer_Site_Id)->first();
            $alarm = DB::connection('sqlsrv')->table('dbo.AR_Customer_System')->select('Alarm_Account')->where('Customer_Site_Id', $svc->Customer_Site_Id)->first();
            $sq_ft = DB::connection('sqlsrv')->table('dbo.EGD_Footage')->select('footage')->where('customer_id', $svc->Customer_Id)->first();
            $cust_num = DB::connection('sqlsrv')->table('dbo.AR_Customer')->select('Customer_Number')->where('customer_id', $svc->Customer_Id)->first();

            $bus_tmp = substr($bus->Business_Name, 0, strpos($bus->Business_Name, "*"));
            $bus_name = trim($bus_tmp);

            $ticket_type = request('ticket_type');
            return view('pst.create', compact('ticket_num', 'ticket_type', 'svc', 'bus', 'alarm', 'bus_name', 'sq_ft', 'cust_num', 'sys_options'));
        }
        else {
            return view('pst.create', compact('sys_options'));
        }
    }

    public function store() {

        $pst = new PST;

        function combine(&$arr, $name, $num) {
            for($i=1; $i < $num; $i++) {
                $tmp = $name . $i;
                array_push($arr, request($tmp));
            }
        }

        $check = [];
        combine($check, "check", 32);

        PST::create([
            'ticket_num' => request('ticket_num'),
            'date' => request('date'),
            'acct_num' => request('acct_num'),
            'tech' => request('tech'),
            'installer' => request('installer'),
            'cust_name' => request('cust_name'),
            'city' => request('city'),
            'state' => request('state'),
            'check_type' => request('check_type'),
            'check' => $check,
            'quest1' => request('quest1'),
            'quest2' => request('quest2'),
            'quest3' => request('quest3'),
            'quest4' => request('quest4'),
            'quest5' => request('quest5'),
            'quest6' => request('quest6'),
            'quest7' => request('quest7'),
            'quest8' => request('quest8'),
            'tt' => request('tt'),

        ]);

        $ticket_num = request('ticket_num');
        $type = 'pst';
        
        return redirect('/tickets/create')->with(compact('ticket_num'));
    }

    public function download(PST $pst) {
        $ticknum = $pst->ticket_num;
        $tickname = $ticknum . '_post.pdf';
        $file = storage_path() . '/app/public/' . $ticknum . '/' . $tickname;
        //dd($file);

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, $tickname, $headers);
    }
}

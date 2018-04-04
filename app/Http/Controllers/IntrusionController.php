<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intrusion;
use File;
use Illuminate\Support\Facades\Storage;

class IntrusionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }
    //
    function arrays() {

        $sys_options = array("Wireless", "Hardwired");
        $qual_options = array("Choose Rank", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

        return array($qual_options, $sys_options) ;
    }

    public function index() {

        $intrusion = Intrusion::all();
        return view('intrusions.index', compact('intrusion'));

    }

    public function show(Intrusion $intrusion) {

        $sel_options = $this->arrays();

        return view('intrusions.show', compact('intrusion', 'sel_options'));
    }

    public function create() {

        $sel_options = $this->arrays();

        if ($ticket_num = request('ticket_num')) {
            return view('intrusions.create', compact('ticket_num', 'sel_options'));
        }
        else {
            return view('intrusions.create', compact('sel_options'));
        }
    }

    public function store() {

        $intrusion = new Intrusion;

        //Convert data uri to image file
        $data_uri = request('sig_img');
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);

        //Create directory for img uploads
        $img_name = 'intrusion_sig.jpg';
        $dest = '/public/' . request('ticket_num');

        if(!File::isDirectory($dest)) {
            Storage::makeDirectory($dest);
        }

        $img_dest = $dest . '/' . $img_name;

        Storage::put($img_dest, $decoded_image);

        Intrusion::create([
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
            'zone1' => request('zone1'),
            'zone2' => request('zone2'),
            'zone3' => request('zone3'),
            'zone4' => request('zone4'),
            'zone5' => request('zone5'),
            'zone6' => request('zone6'),
            'zone7' => request('zone7'),
            'zone8' => request('zone8'),
            'zone9' => request('zone9'),
            'zone10' => request('zone10'),
            'zone11' => request('zone11'),
            'zone12' => request('zone12'),
            'system_type' => request('system_type'),
            'key_num' => request('key_num'),
            'batt_volt' => request('batt_volt'),
            'gsm' => request('gsm'),
            'ac_power' => request('ac_power'),
            'user_code' => request('user_code'),
            'equip' => request('equip'),
            'rep_name' => request('rep_name'),
            'alarm_time' => request('alarm_time'),
            'online_time' => request('online_time'),
            'svc_reason' => request('svc_reason'),
            'solution' => request('solution'),
            'stname' => request('stname'),
            'service_qual' => request('service_qual'),
            'tt' => request('tt'),

        ]);

        return redirect('/');

    }
}

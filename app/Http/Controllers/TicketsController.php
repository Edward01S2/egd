<?php

namespace App\Http\Controllers;

use App\Ticket;
use View;
use File;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use ImageOptimizer;


class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    function arrays() {
        $zone_options = array("Choose Zone", "Motion", "Front Door", "Door Contact", "Mag Lock", "Fence 1", "Fence 2", "Fence 3", "Fence 4", "Fence 5", "Fence 6", "Keyswitch Relay 1",
        "Keyswitch Relay 2", "Keyswitch Relay 3", "Keyswitch Relay 4", "Keyswitch Relay 5", "Gate 1", "Gate 2", "Siren Tamper", "OD Box Tamper", "APS Tamper");

        $key_options = array("Choose Key #", "7809", "7810", "LCD K.P.", "1303", "C705", "LED K.P");

        $ener_options = array("Energizer", "APS 2j", "APS 5j", "APS Low Voltage", "B-80 (0.8 Joules)", "B-280(B250-B180)", "B-700(B600)", "B-1600(B1200)");

        $feed_options = array("Choose Feed", "Feed #4", "Feed #6", "Feed #8", "Feed #10", "Feed #11", "Feed #12");

        $veg_options = array("High", "Med", "Low");

        $qual_options = array("Choose Rank", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

        return array($zone_options, $key_options, $ener_options, $feed_options, $veg_options, $qual_options) ;
    }

    public function index() {

        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function show(Ticket $ticket) {

        $sel_options = $this->arrays();
        $dest = '/public/' . $ticket->ticket_num . '/';
        //$files = Storage::files($dest);
        //dd($files);

        if($files = Storage::files($dest . '/')) {
            foreach($files as $key => $value) {
                $path_parts = pathinfo($value, PATHINFO_BASENAME);
                $uploads[] = $path_parts;

                if(preg_match('/signature.jpg/', $value)) {
                    unset($uploads[$key]);
                }
                if(preg_match('/ticket.pdf/', $value)) {
                    unset($uploads[$key]);
                }
            }

            $len = count($uploads);
            if($len == 1) {
                $upl_one = array_slice($uploads, 0, round($len / 2));
                $upl_two = [];
            }
            else {
                $upl_one = array_slice($uploads, 0, round($len / 2));
                $upl_two = array_slice($uploads, $len / 2);
            }

            //dd($upl_one);

        }

        return view('tickets.show', compact('ticket', 'sel_options', 'upl_one', 'upl_two'));
    }

    public function create() {

        $sel_options = $this->arrays();

        if ($ticket_num = request('ticket_num')) {
            return view('tickets.create', compact('sel_options', 'ticket_num'));
        }
        else {
            return view('tickets.create', compact('sel_options'));
        }
    }

    public function store() {
        //dd(request() -> all());
        $ticket = new Ticket;

        //Combine request inputs into specified arrays for database

        function combine(&$arr, $name, $num) {
            for($i=1; $i < $num; $i++) {
                $tmp = $name . $i;
                array_push($arr, request($tmp));
            }
        }
        $zone = $stz = $sizone = $siener = $stz = $stv = $cv = $va = $aa = $ao = $fo = $fv = $alo = $al = [];

        combine($zone, "zone", 10);
        combine($sizone, "sizone", 9);
        combine($siener, "siener", 9);
        combine($stz, "stz", 9);
        combine($stv, "stv", 17);
        combine($cv, "cv", 13);
        combine($va, "va", 13);
        combine($aa, "aa", 13);
        combine($ao, "ao", 13);
        combine($fo, "fo", 13);
        combine($fv, "fv", 13);
        combine($alo, "alo", 13);
        combine($al, "al", 13);
        
        //dd($zone);

        //Convert data uri to image file
        $data_uri = request('sig_img');
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);

        //Create directory for img uploads
        $img_name = 'signature.jpg';
        $dest = '/public/' . request('ticket_num');

        if(!File::isDirectory($dest)) {
            Storage::makeDirectory($dest);
        }

        $img_dest = $dest . '/' . $img_name;

        Storage::put($img_dest, $decoded_image);

        $files = request('files');
        if(!empty($files)) {
            for($i = 0; $i < count($files); $i++) {
                
                Storage::put($dest, $files[$i]);
            }
        }

        //Optimize images
        //$dest = '/public/' . $ticket->ticket_num . '/';
        // $path = '/' . request('ticket_num') . '/';
        // //dd($path);
        // $files = Storage::files($path);
        // dd($files);
        // if($files = Storage::files($path)) {
        //     dd($files);
        //     foreach($files as $key ) {
        //         //dd$key;
        //         //ImageOptimizer::optimize($key);
        //     }
        // }

        Ticket::create([
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
            'svc_reason' => request('svc_reason'),
            'corr_action' => request('corr_action'),
            'rec_prev' => request('rec_prev'),
            'other_comm' => request('other_comm'),
            'zone' => $zone,
            'vegetation' => request('vegetation'),
            'batt_num' => request('batt_num'),
            'solar_num' => request('solar_num'),
            'sign60' => request('sign60'),
            'batt_charge' => request('batt_charge'),
            'sizone' => $sizone,
            'siener' => $siener,
            'break_gap' => request('break_gap'),
            'volt_off' => request('volt_off'),
            'stz' => $stz,
            'stv' => $stv,
            'cv' => $cv,
            'va' => $va,
            'aa' => $aa,
            'ao' => $ao,
            'fo' => $fo,
            'fv' => $fv,
            'alo' => $alo,
            'al' => $al,
            'dvm' => request('dvm'),
            'wire_tight' => request('wire_tight'),
            'wire_hot' => request('wire_hot'),
            'feed_start' => request('feed_start'),
            'alarm_time' => request('alarm_time'),
            'online_time' => request('online_time'),
            'armed_arr' => request('armed_arr'),
            'armed_dep' => request('armed_dep'),
            'fence_arr' => request('fence_arr'),
            'fence_dep' => request('fence_dep'),
            'stname' => request('stname'),
            'service_qual' => request('service_qual'),

        ]);

        return redirect('/tickets');
    }

}

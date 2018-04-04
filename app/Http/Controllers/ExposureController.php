<?php

namespace App\Http\Controllers;

use App\Exposure;
use View;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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

        if ($ticket_num = request('ticket_num')) {
            return view('exposures.create', compact('ticket_num'));
        }
        else {
            return view('exposures.create');
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

        return redirect('/');
    }
}

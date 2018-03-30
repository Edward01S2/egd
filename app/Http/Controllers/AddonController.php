<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $dest = '/public/' . $ticket->ticket_num . '/';
        //$files = Storage::files($dest);
        //dd($files);

        return view('addons.show', compact('addon'));
    }

    public function create() {

        if ($ticket_num = request('ticket_num')) {
            return view('addons.create', compact('ticket_num'));
        }
        else {
            return view('addons.create');
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
        $img_name = 'signature.jpg';
        $dest = '/public/' . request('ticket_num');

        if(!File::isDirectory($dest)) {
            Storage::makeDirectory($dest);
        }

        $img_dest = $dest . '/' . $img_name;

        Storage::put($img_dest, $decoded_image);

        Addon::create([

        ]);

        return redirect('/addon');
    }
}

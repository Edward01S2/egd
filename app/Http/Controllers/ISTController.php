<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ISTController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function index() {

        $ist = IST::all();
        return view('ist.index', compact('ist'));
    }

    public function show(IST $ist) {

        $dest = '/public/' . $ist->ticket_num . '/';
        //$files = Storage::files($dest);
        //dd($files);

        return view('ist.show', compact('ist'));
    }

    public function create() {

        if ($ticket_num = request('ticket_num')) {
            return view('ist.create', compact('ticket_num'));
        }
        else {
            return view('ist.create');
        }
    }

    public function store() {

        $ist = new IST;
        
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

        IST::create([

        ]);

        return redirect('/');
    }
}

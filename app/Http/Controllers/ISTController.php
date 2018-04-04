<?php

namespace App\Http\Controllers;

use App\IST;
use View;
use File;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Storage;

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

        $dest = '/public/' . request('ticket_num');

        if(!File::isDirectory($dest)) {
            Storage::makeDirectory($dest);
        }

        IST::create([
            'ticket_num' => request('ticket_num'),
            'serv_tech' => request('serv_tech'),
            'visit_date' => request('visit_date'),
            'arrive_time' => request('arrive_time'),
            'depart_time' => request('depart_time'),
            'total_time' => request('total_time'),
            'cust_name' => request('cust_name'),
            'city' => request('city'),
            'state' => request('state'),
            'contact' => request('contact'),
            'phone' => request('phone'),
            'cont_name' => request('cont_name'),
            'cont_date' => request('cont_date'),
            'cont_time' => request('cont_time'),
            'site_date' => request('site_date'),
            'site_info' => request('site_info'),
            'footage' => request('footage'),
            'gate_panels' => request('gate_panels'),
            'num_elec' => request('num_elec'),
            'outdoor' => request('outdoor'),
            'num_sing' => request('num_sing'),
            'num_dbl' => request('num_dbl'),
            'fiberglass' => request('fiberglass'),
            'roof_fence' => request('roof_fence'),
            'pl1' => request('pl1'),
            'pl2' => request('pl2'),
            'pl3' => request('pl3'),
            'pl4' => request('pl4'),
            'pl5' => request('pl5'),
            'pl6' => request('pl6'),
            'pl7' => request('pl7'),
            'pli1' => request('pli1'),
            'pli2' => request('pli2'),
            'pli3' => request('pli3'),
            'pli4' => request('pli4'),
            'pli5' => request('pli5'),
            'pli6' => request('pli6'),
            'pli7' => request('pli7'),
            'inst1' => request('inst1'),
            'inst2' => request('inst2'),
            'inst3' => request('inst3'),
            'inst4' => request('inst4'),
            'add1' => request('add1'),
            'add2' => request('add2'),
            'add3' => request('add3'),
            'add4' => request('add4'),
            'add5' => request('add5'),
            'add6' => request('add6'),
            'tt' => request('tt'),
        ]);

        return redirect('/');
    }

    public function download(IST $ist) {
        $ticknum = $ist->ticket_num;
        $tickname = $ticknum . '_ist.pdf';
        $file = storage_path() . '/app/public/' . $ticknum . '/' . $tickname;
        //dd($file);

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, $tickname, $headers);
    }
}

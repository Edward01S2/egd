<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PST;

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

        if ($ticket_num = request('ticket_num')) {
            return view('pst.create', compact('ticket_num', 'sys_options'));
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

        ]);

        return redirect('/');
    }
}

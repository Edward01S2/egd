<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntrusionController extends Controller
{
    //
    function arrays() {
        $sys_options = array("Wireless", "Hardwired");

        $qual_options = array("Choose Rank", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

        return array($qual_options, $sys_options) ;
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
}

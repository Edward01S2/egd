<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class Herbicide extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $ticknum = $this->ticket->ticket_num;
        $store = '/public/' . $ticknum . '/pics/';

        if($files = Storage::files($store)) {
            $path = storage_path('app/public/' . $ticknum . '/' . $ticknum . '_sv_pics.pdf');
        }
        else {
            $path = storage_path('app/public/' . $ticknum . '/' . $ticknum . '_sv.pdf');
        }

        $sq_ft = $this->ticket->sq_ft;
        if($sq_ft == 0) {
            $herb = 'Square footage could not be determined.';
        }
        else if($sq_ft < 5000 && $sq_ft >= 1) {
            $herb = 1;
        }
        else {
            $herb = 2;
        }

        //dd($ticket);
        return $this->view('emails.herbicide')
            ->subject('Herbicide Request - Cust. #' . $this->ticket->cust_num)
            ->with([
                'cust_num' => $this->ticket->cust_num,
                'herb' => $herb,
                'site_contact' => $this->ticket->contact,
            ])
            ->attach($path)
            ;
    }
}

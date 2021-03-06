<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class Vegetation extends Mailable
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

        //dd($ticket);
        return $this->view('emails.vegetation')
            ->subject('CNR Request - Cust. #' . $this->ticket->cust_num)
            ->with([
                'cust_num' => $this->ticket->cust_num,
                'ticket_num' => $this->ticket->ticket_num,
                'service_tech' => $this->ticket->serv_tech,
                'creation_date' => $this->ticket->ticket_created,
                'reason' => 'Vegetation',
            ])
            ->attach($path)
            ;
    }
}
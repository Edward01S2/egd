<?php

namespace App\Providers;
use App\Ticket;
use Auth;
use Illuminate\Support\ServiceProvider;
use Spatie\Browsershot\Browsershot;
use App\Mail\Vegetation;
use Illuminate\Support\Facades\Storage;

class TicketServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Ticket::created(function($ticket) {
            $path = storage_path('app/public/' . $ticket->ticket_num . '/ticket.pdf');
            $url = url('/tickets/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)->emulateMedia('print')->savePdf($path);

            //Automatic emails
            //Vegetation select starts with 0 - high
            //return Storage::download('public/' . $ticket->ticket_num . '/ticket.pdf');

            if($ticket->vegetation === "0") {
                //$attach = Storage::url('public/' . $ticket->ticket_num . '/ticket.pdf');
                //dd($attach);
                $path = storage_path('app/public/' . $ticket->ticket_num . '/ticket.pdf');
                $user = Auth::user();
                \Mail::send('emails.vegetation', [], function($m) use ($ticket, $user) {
                    $m->to($user->email);
                    $m->subject('Send Herbicide');
                    $m ->attach(storage_path('app/public/' . $ticket->ticket_num . '/ticket.pdf'));
                });
            }

        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

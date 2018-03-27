<?php

namespace App\Providers;
use App\Ticket;
use Illuminate\Support\ServiceProvider;
use Spatie\Browsershot\Browsershot;

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

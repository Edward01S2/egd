<?php

namespace App\Providers;
use App\Ticket;
use Auth;
use Illuminate\Support\ServiceProvider;
use Spatie\Browsershot\Browsershot;
use App\Mail\Vegetation;
use Illuminate\Support\Facades\Storage;
//use ImageOptimizer;


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

            // $store = '/public/' . $ticket->ticket_num . '/';
            // //dd($path);
            
            // //dd($path);
            // //$files = Storage::files($store);
            // //dd($files);
            // if($files = Storage::files($store)) {
            //     //dd($files);
            //     foreach($files as $key ) {
            //         //dd$key;
            //         $path = storage_path('app/' . $key);
            //         //$path = ('/storage/app/' . $key);
            //         //dd($path);
            //         ImageOptimizer::optimize($path);
            //     }
            // }

            $path = storage_path('app/public/' . $ticket->ticket_num . '/ticket.pdf');
            $url = url('/tickets/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)
                ->emulateMedia('print')
                ->save($path);

            //Automatic emails
            //Vegetation select starts with 0 - high

            if($ticket->vegetation === "0") {
                //$attach = Storage::url('public/' . $ticket->ticket_num . '/ticket.pdf');
                //dd($attach);
                $path = storage_path('app/public/' . $ticket->ticket_num . '/ticket.pdf');
                //$user = Auth::user();
                \Mail::send('emails.vegetation', [], function($m) use ($path) {
                    $m->to('edward.01s2@gmail.com');
                    $m->subject('Send Herbicide');
                    //$m ->attach($path);
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

<?php

namespace App\Providers;
use App\Ticket;
use Auth;
use Illuminate\Support\ServiceProvider;
use Spatie\Browsershot\Browsershot;
use App\Mail\Vegetation;
use Illuminate\Support\Facades\Storage;
use ImageOptimizer;


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

            $store = '/public/' . $ticket->ticket_num . '/';
            // //dd($path);
            
            // //dd($path);
            // //$files = Storage::files($store);
            // //dd($files);
            if($files = Storage::files($store)) {
                //dd($files);
                foreach($files as $key ) {
                    //dd$key;
                    $path = storage_path('app/' . $key);
                    //$path = ('/storage/app/' . $key);
                    //dd($path);
                    ImageOptimizer::optimize($path);
                    //app(Spatie\ImageOptimizer\OptimizerChain::class)->optimize($path);
                }
            }

            $path = storage_path('app/public/' . $ticket->ticket_num . '/ticket.pdf');
            $url = url('/tickets/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)
                ->emulateMedia('print')
                ->save($path);

            //Automatic emails
            //Vegetation select starts with 2 - high and the site can arm

            $ticknum = $ticket->ticket_num;

            if($ticket->vegetation === "2" && $ticket->site_arm === "1") {

                $path = storage_path('app/public/' . $ticket->ticket_num . '/ticket.pdf');

                \Mail::send('emails.vegetation', [], function($m) use ($path, $ticknum) {
                    $m->to('eshannon@afterhoursupgrades.com');
                    $m->subject('Ticket # '. $ticknum . ' - Send Herbicide');
                    $m ->attach($path);
                });
            }

            //Vegetation is high and the site cannot arm
            if($ticket->vegetation === "2" && $ticket->site_arm === "0") {

                $path = storage_path('app/public/' . $ticket->ticket_num . '/ticket.pdf');

                \Mail::send('emails.vegetation', [], function($m) use ($path, $ticknum) {
                    $m->to('eshannon@afterhoursupgrades.com');
                    $m->subject('Ticket # '. $ticknum . ' - Customer Not Ready');
                    $m ->attach($path);
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

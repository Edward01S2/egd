<?php

namespace App\Providers;
use App\Ticket;
use App\Intrusion;
use App\PST;
use App\IST;
use App\Exposure;
use App\Addon;
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

            $store = '/public/' . $ticket->ticket_num . '/pics/';

            if($files = Storage::files($store)) {
                foreach($files as $key ) {
                    $path = storage_path('app/' . $key);
                    ImageOptimizer::optimize($path);
                }
                $path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_sv_pics.pdf');
            }
            else {
                $path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_sv.pdf');
            }

            
            $url = url('/tickets/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)
                ->emulateMedia('print')
                ->save($path);

            //Automatic emails
            //Vegetation select starts with 2 - high and the site can arm

            $ticknum = $ticket->ticket_num;

            if($ticket->vegetation === "2" && $ticket->site_arm === "1") {

                //$path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticknum .'_sv.pdf');

                \Mail::send('emails.vegetation', [], function($m) use ($path, $ticknum) {
                    $m->to('eshannon@afterhoursupgrades.com');
                    $m->subject('Ticket #'. $ticknum . ' - Send Herbicide');
                    $m ->attach($path);
                });
            }

            //Vegetation is high and the site cannot arm
            if($ticket->vegetation === "2" && $ticket->site_arm === "0") {

                //$path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticknum .'_sv.pdf');

                \Mail::send('emails.vegetation', [], function($m) use ($path, $ticknum) {
                    $m->to('eshannon@afterhoursupgrades.com');
                    $m->subject('Ticket #'. $ticknum . ' - Customer Not Ready');
                    $m ->attach($path);
                });
            }

            if($ticket->followup === "1") {

                //$path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticknum .'_sv.pdf');

                \Mail::send('emails.vegetation', [], function($m) use ($path, $ticknum) {
                    $m->to('eshannon@afterhoursupgrades.com');
                    $m->subject('Ticket #'. $ticknum . ' - Customer Not Ready: Debris');
                    $m ->attach($path);
                });
            }

            if($ticket->followup === "2") {

                //$path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticknum .'_sv.pdf');

                \Mail::send('emails.vegetation', [], function($m) use ($path, $ticknum) {
                    $m->to('eshannon@afterhoursupgrades.com');
                    $m->subject('Ticket #'. $ticknum . ' - Customer Not Ready: Need Repair');
                    $m ->attach($path);
                });
            }

            if($ticket->followup === "3") {

                //$path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticknum .'_sv.pdf');

                \Mail::send('emails.vegetation', [], function($m) use ($path, $ticknum) {
                    $m->to('eshannon@afterhoursupgrades.com');
                    $m->subject('Ticket #'. $ticknum . ' - Customer Not Ready: Other');
                    $m ->attach($path);
                });
            }



        });

        Intrusion::created(function($ticket) {
            $path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_intr.pdf');
            $url = url('/intrusion/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)
                ->emulateMedia('print')
                ->save($path);

            \Mail::send('emails.vegetation', [], function($m) use ($path, $ticket) {
                $m->to('eshannon@afterhoursupgrades.com');
                $m->subject('Ticket #'. $ticket->ticket_num . ' - Intrusion');
                $m ->attach($path);
            });
        });

        PST::created(function($ticket) {
            //Create pdf
            $path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_post.pdf');
            $url = url('/pst/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)
                ->emulateMedia('print')
                ->save($path);

            //Automated email

            $sv = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_sv.pdf');

            \Mail::send('emails.vegetation', [], function($m) use ($path, $ticket, $sv) {
                $m->to('eshannon@afterhoursupgrades.com');
                $m->subject('Ticket #'. $ticket->ticket_num . ' - Post-Install');
                $m ->attach($path);
                $m->attach($sv);
            });
            
        });

        Exposure::created(function($ticket) {
            $path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_expo.pdf');
            $url = url('/exposure/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)
                ->emulateMedia('print')
                ->save($path);

            $sv = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_sv.pdf');

            \Mail::send('emails.vegetation', [], function($m) use ($path, $ticket, $sv) {
                $m->to('eshannon@afterhoursupgrades.com');
                $m->subject('Ticket #'. $ticket->ticket_num . ' - Exposure');
                $m ->attach($path);
                $m->attach($sv);
            });
        });

        IST::created(function($ticket) {
            $path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_ist.pdf');
            $url = url('/ist/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)
                ->emulateMedia('print')
                ->save($path);

            \Mail::send('emails.vegetation', [], function($m) use ($path, $ticket) {
                $m->to('eshannon@afterhoursupgrades.com');
                $m->subject('Ticket #'. $ticket->ticket_num . ' - Pre-Install Ticket');
                $m ->attach($path);
            });
        });

        Addon::created(function($ticket) {
            $path = storage_path('app/public/' . $ticket->ticket_num . '/' . $ticket->ticket_num . '_addon.pdf');
            $url = url('/addon/' . $ticket->ticket_num);
            //dd($url);
            Browsershot::url($url)
                ->emulateMedia('print')
                ->save($path);

            \Mail::send('emails.vegetation', [], function($m) use ($path, $ticket) {
                $m->to('eshannon@afterhoursupgrades.com');
                $m->subject('Ticket #' . $ticket->ticket_num . ' - Addon');
                $m ->attach($path);
            });
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

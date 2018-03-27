<?php

namespace App;


class Ticket extends Model
{
    
    //
    protected $casts = [
        'zone' => 'array',
        'stz' => 'array',
        'sizone' => 'array',
        'siener' => 'array',
        'stz' => 'array',
        'stv' => 'array',
        'cv' => 'array',
        'va' => 'array',
        'aa' => 'array',
        'ao' => 'array',
        'fo' => 'array',
        'fv' => 'array',
        'alo' => 'array',
        'al' => 'array',
    ];

    public function getRouteKeyName() {
        return 'ticket_num';
    }
    
}

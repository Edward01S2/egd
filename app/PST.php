<?php

namespace App;

class PST extends Model
{
    public $table = "pst";

    protected $casts = [
        'check' => 'array',
    ];

    public function getRouteKeyName() {
        return 'ticket_num';
    }
}

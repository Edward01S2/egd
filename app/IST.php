<?php

namespace App;

class IST extends Model
{
    public $table = "ist";

    public function getRouteKeyName() {
        return 'ticket_num';
    }
}

<?php

namespace App;


class Addon extends Model
{

    public $table = "addon";

    public function getRouteKeyName() {
        return 'ticket_num';
    }
}

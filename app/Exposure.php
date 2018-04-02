<?php

namespace App;

class Exposure extends Model
{
    public $table = "expo";

    public function getRouteKeyName() {
        return 'ticket_num';
    }
}

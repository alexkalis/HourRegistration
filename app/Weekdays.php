<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekdays extends Model
{
    public function hours()
     {
        return $this->hasOne('app\HourRegistration');
    }
}

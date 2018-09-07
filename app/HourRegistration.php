<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HourRegistration extends Model
{
    protected $table = 'HourRegistration';
    protected $fillable = 'hours';

    public function weekdays()
     {
        return $this->hasMany('app\Weekdays');
    }
}

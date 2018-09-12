<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HourRegistration extends Model
{
    protected $table = 'HourRegistration';
    protected $fillable = ['hours','user_id'];

    public function user() {
      return $this->belongsTo(User::Class);
    }

    public function weekdays()
     {
        return $this->hasMany('app\Weekdays');
    }
}

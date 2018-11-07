<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\User;
class Students extends Model
{
    protected $table = 'students';

    public function userStudent() {
        $this->belongsTo('App\User', 'id', 'user_id');
    }
}

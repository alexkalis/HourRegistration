<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verifyUsers() {
        return $this->hasOne('App\Verifyuser');
    }

    public function hours() {
      return $this->hasMany(HourRegistration::class);
    }
    public function student() {
    return $this->hasOne('App\Students'); // obviously ensure you correct the namespaces if necessary
}

}

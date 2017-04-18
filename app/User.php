<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'User';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];


    public function threads() {
        return $this->hasMany(Thread::class);
    }

    public function threadVisited() {
        return $this->hasMany(ThreadVisit::class);
    }

    public function profile() {
        return $this->hasOne(Profile::class);
    }

    public function passwordReset() {
        return $this->hasOne(PasswordReset::class);
    }

}

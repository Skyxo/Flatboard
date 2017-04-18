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

    /**
     * All opened threads of this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function threads() {
        return $this->hasMany(Thread::class, 'userID', 'userID');
    }

    /**
     * All visited threads
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function threadVisited() {
        return $this->hasMany(ThreadVisit::class, 'userID', 'userID');
    }

    /**
     * Profile of this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile() {
        return $this->hasOne(Profile::class, 'userID', 'userID');
    }

    /**
     * Password-reset token for this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function passwordReset() {
        return $this->hasOne(PasswordReset::class, 'userID', 'userID');
    }

}

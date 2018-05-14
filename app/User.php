<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Support\Facades\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    // use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'first_name', 'last_name', 'born_at', 'born_date', 'gender', 'telp', 'username', 'password', 'email', 'photo', 'address', 'point', 'level'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public $timestamps = true;

    public function adventure()
    {
      return $this->hasMany('App\Adventure');
    }

    public function post()
    {
      return $this->hasMany('App\Post');
    }

    public function transaction()
    {
      return $this->hasMany('App\Transaction');
    }
}

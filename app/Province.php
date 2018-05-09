<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $guarded = [];

    public function regional()
    {
      return $this->hasMany('App\Regional');
    }
    //
    public function destination()
    {
      return $this->hasMany('App\Destination');
    }
}

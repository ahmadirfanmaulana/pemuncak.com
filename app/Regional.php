<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    //
    protected $guarded = [];

    public function province()
    {
      return $this->belongsTo('App\Province');
    }

    public function destination()
    {
      return $this->hasMany('App\Destination');
    }

}

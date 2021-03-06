<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $guarded = []; 

    public function destination()
    {
      return $this->belongsTo('App\Destination');
    }
}

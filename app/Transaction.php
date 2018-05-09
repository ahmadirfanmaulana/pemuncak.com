<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $guarded = []; 

    public function packet()
    {
      $this->belongsTo('App\Packet');
    }
    public function user()
    {
      $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function destination()
    {
      return $this->belongsTo('App\Destination');
    }
    public function packetSelect()
    {
      return $this->hasOne('App\PacketSelect');
    }
    public function transaction()
    {
      return $this->hasOne('App\Transaction');
    }
}

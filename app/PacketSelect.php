<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacketSelect extends Model
{
    //
    protected $guarded = [];

    public function packet()
    {
      return $this->belongsTo('App\Packet');
    }
    public function packetItem()
    {
      return $this->belongsTo('App\PacketItem');
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacketItem extends Model
{
    //
    protected $table = 'packet_items';
    protected $guarded = []; 

    public function packetSelect()
    {
      return $this->hasMany('App\PacketSelect');
    }

}

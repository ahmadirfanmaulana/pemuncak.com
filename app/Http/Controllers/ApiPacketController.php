<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packet;

class ApiPacketController extends Controller
{
    //
    public function __construct(Packet $packets)
    {
      $this->packets = $packets;
      $this->my_packets = $this->packets->with(['user', 'destination']);
    }
    public function my_packets()
    { 
      return response($this->my_packets->get());
    }
    public function my_packets_count()
    {
      return response($this->my_packets->count());
    }
}

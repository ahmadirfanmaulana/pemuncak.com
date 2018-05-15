<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packet;

class ClimberController extends Controller
{
    //
    public function __construct(Packet $packets)
    {
      $this->packets = $packets;
    }

    public function index()
    {
      return view('site.climber.dashboard')
      ->with('menu_active' , 'dashboard');
    }
    // adventure
    public function adventure()
    {

    }
    // climbing
    public function climbing()
    {

    }
    // posts
    public function posts()
    {

    }
    // packets
    public function packets()
    {
      $data = array(

      );

      return view('site.climber.packets.home')
      ->with('data', $data)
      ->with('menu_active', 'packets');
    }



}

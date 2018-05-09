<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClimberController extends Controller
{
    //
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

    }



}

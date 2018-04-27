<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClimbingController extends Controller
{
    //
    //
    public function __construct()
    {
      $this->menu = "climbing";
    }

    public function index()
    {
      return view('site.climbing.adventure.home');
    }
}

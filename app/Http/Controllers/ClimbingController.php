<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClimbingController extends Controller
{
    //
    //
    public function __construct()
    {
      $session = session([
        'pageActive' => 'climbing'
      ]);
    }

    public function index()
    {
      return view('site.climbing.adventure.home');
    }
}

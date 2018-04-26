<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdventureController extends Controller
{
    //
    public function __construct()
    {
      $session = session([
        'pageActive' => 'adventure'
      ]);
    }

    public function index()
    { 
      return view('site.climbing.adventure.home');
    }
}

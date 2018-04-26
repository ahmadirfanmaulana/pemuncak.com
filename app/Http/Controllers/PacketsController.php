<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacketsController extends Controller
{
    //

    public function pageActive()
    {
      return $session = session([
        'pageActive' => 'packets'
      ]);
    }

    public function index()
    {
      $this->pageActive();

      return view('site.climbing.adventure.home');
    }
}

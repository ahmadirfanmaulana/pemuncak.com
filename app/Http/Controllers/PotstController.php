<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotstController extends Controller
{
    //
    public function __construct()
    {
      $this->menu = "posts";
    }

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

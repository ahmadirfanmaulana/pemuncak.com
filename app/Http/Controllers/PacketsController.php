<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacketsController extends Controller
{
    //

    public function __construct()
    {
      $this->menu = "packets";
    }

    public function index()
    {
      $this->pageActive();

      return view('site.climbing.adventure.home');
    }
}

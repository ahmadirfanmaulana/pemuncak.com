<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class DashboardController extends Controller
{

    //
    public function main()
    {

      return view('layouts.app_dashboard');

    }

    public function index()
    {

      return view('site.climbing.home');

    }


}

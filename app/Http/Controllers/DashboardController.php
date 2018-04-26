<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {

    }
    //
    public function index()
    {
      $session = session([
        'pageActive' => 'dashboard'
      ]);

      return view('site.climbing.dashboard');
    }

    
}

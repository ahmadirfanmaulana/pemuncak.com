<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function home()
    {
      $session = session([
        'pageActive' => 'home'
      ]);

      return view('site.landing.home');
    }

    public function adventures()
    {
      $session = session([
        'pageActive' => 'adventures'
      ]);
      
      return view('site.landing.adventures');
    }

    public function destinations()
    {
      $session = session([
        'pageActive' => 'destinations'
      ]);

      return view('site.landing.destinations');
    }

    public function campings()
    {
      return view('site.landing.campings');
    }

    public function blog()
    {
      return view('site.landing.blog');
    }

    public function news()
    {
      return view('site.landing.news');
    }

    public function about()
    {
      return view('site.landing.about');
    }

    public function faq()
    {
      return view('site.landing.faq');
    }
}

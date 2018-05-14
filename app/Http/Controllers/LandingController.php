<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class LandingController extends Controller
{
    //
    public function home()
    {

      return view('site.landing.home')
      ->with('menu_active', 'home');
    }

    public function adventures()
    {

      return view('site.landing.adventures')
      ->with('menu_active', 'adventures');
    }

    public function destinations(Destination $destinations)
    {
      $data = array(
        'destinations' => $destinations->with(['province', 'regional'])->get()
      );

      return view('site.landing.destinations')
      ->with('menu_active', 'destinations')
      ->with('data', $data);
    }

    public function destinationsDetail($id, Destination $destinations)
    {
      $data = $destinations->where('id', $id)->with(['province', 'regional'])->first();

      return view('site.landing.destinations_detail')
      ->with('menu_active', 'destinations')
      ->with('data', $data);
    } 

    public function blog()
    {
      return view('site.landing.blog')
      ->with('menu_active', 'blogs');
    }

    public function news()
    {
      return view('site.landing.news')
      ->with('menu_active', 'news');
    }

    public function about()
    {
      return view('site.landing.about')
      ->with('menu_active', 'about');
    }

    public function faq()
    {
      return view('site.landing.faq')
      ->with('menu_active', 'faq');
    }
}

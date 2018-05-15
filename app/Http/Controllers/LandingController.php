<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use App\User;
use App\Adventure;
use App\Post;

class LandingController extends Controller
{
    public function __construct(Destination $destinations, User $users, Adventure $adventures, Post $posts)
    {
      $this->destinations = $destinations;
      $this->adventures = $adventures;
      $this->users = $users;
      $this->posts = $posts;
    }
    public function home()
    {
      $data = array(
        'favorite_destinations' => $this->destinations->with(['province', 'regional'])->get(),
        'count_climbers' => $this->users->where('level', 'climber')->count(),
        'count_destinations' => $this->destinations->count(),
        'count_adventures' => $this->adventures->count(),
      );

      return view('site.landing.home')
      ->with('data', $data)
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
      $data = array(
        'all_blog' => $this->posts->where('type', 'blog')->with(['user'])->get()
      );

      return view('site.landing.blog')
      ->with('data', $data)
      ->with('menu_active', 'blog');
    }
    public function blog_detail($id)
    {
      $data = array(
        'data_blog' => $this->posts->where(['type' => 'blog', 'id' => $id])->with(['user'])->first(),
        'recent_blog' => $this->posts->where('type', 'blog')->with(['user'])->orderBy('created_at', 'desc')->skip(0)->take(5)->get()
      );

      return view('site.landing.blog_detail')
      ->with('data', $data)
      ->with('menu_active', 'blog');
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

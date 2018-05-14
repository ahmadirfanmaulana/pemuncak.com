<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

use App\Destination;
use App\Post;
use App\Step;
use App\User;

class AdministratorController extends Controller
{
    // construct
    public function __construct( Destination $destinations, Post $posts, Step $steps, User $users )
    {
      $this->destinations = $destinations;
      $this->posts = $posts;
      $this->steps = $steps;
      $this->users = $users;
    }

    // dashboard
    public function index()
    {
      // data for view
      $data = array(

        // count destinations
        'count_destinations' => $this->destinations->count(),

        // count destinations
        'count_posts' => $this->posts->count(),

        // count destinations
        'count_steps' => $this->steps->count(),

        // count destinations
        'count_users' => $this->users->count(),

      );

      // view
      return view('site.admin.dashboard')

      // data to view
      ->with('menu_active', 'dashboard')
      ->with('data', $data);

    }

    // destinations
    public function destinations()
    {
      return view('site.admin.destinations.index')
      ->with('menu_active', 'destinations');
    }

    // packetItems
    public function packetItems()
    {
      return view('site.admin.packet-items.home')
      ->with('menu_active', 'packet-items');
    }

    // posts
    public function posts()
    {
      return view('site.admin.posts.home')
      ->with('menu_active', 'posts');
    }

    // steps
    public function steps()
    {
      return view('site.admin.steps.home')
      ->with('menu_active', 'steps');
    }

    // climbers
    public function climbers()
    {
      return view('site.admin.climbers.home')
      ->with('menu_active', 'climbers');;
    }


    // me
    public function me(Guard $guard)
    {
      echo $guard->user()['level'];
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdministratorController extends Controller
{
    // main
    public function main()
    {
      return view('layouts.app_administrator');
    }

    // dashboard
    public function index()
    {
      return view('site.admin.dashboard');
    }

    // destinations
    public function destinations()
    {
      return view('site.admin.destinations.home');
    }
    public function destinationsCreate()
    {
      return view('site.admin.destinations.create');
    }

    // packetItems
    public function packetItems()
    {
      return view('site.admin.packet-items.home');
    }
    public function packetItemsCreate()
    {
      return view('site.admin.packet-items.create');
    }

    public function packetItemsEdit()
    {
      return view('site.admin.packet-items.edit'); 
    }

    // posts
    public function posts()
    {
      return view('site.admin.posts.home');
    }

    // steps
    public function steps()
    {
      return view('site.admin.steps.home');
    }

    // users
    public function users()
    {
      return view('site.admin.users.home');
    }


}

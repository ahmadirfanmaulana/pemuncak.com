<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiClimberController extends Controller
{
    //
    public function __construct(User $users, Request $requests)
    {
      $this->users = $users;
      $this->requests = $requests;
      $this->userType = 'climber';
    }

    public function index()
    {
        $climbers = $this->users->where('level', $this->userType)->get();
        return response($climbers);
    }
    public function count()
    {
      $climbers = $this->users->where('level', $this->userType)->count();
      return response($climbers);
    }
}

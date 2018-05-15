<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class ApiUserController extends Controller
{
    //
    public function __construct(User $users)
    {
      $this->users = $users;
    }

    public function me()
    {
      return response(Auth::user());
    }
}

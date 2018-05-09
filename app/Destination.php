<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    protected $guarded = [];

    public function province(){
  		return $this->belongsTo('App\Province');
  	}

    public function regional(){
  		return $this->belongsTo('App\Regional','regional_id','id');
  	}

    public function packet()
    {
      return $this->hasMany('App\Packet');
    }

    public function adventure()
    {
      return $this->hasMany('App\Adventure');
    }

    public function photo()
    {
      return $this->hasMany('App\Photo');
    }

    public function route()
    {
      return $this->hasMany('App\Route');
    }

    public function step()
    {
      return $this->hasMany('App\Step');
    }

}

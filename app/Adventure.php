<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    //
    protected $guarded = []; 

    public function step()
    {
      return $this->belongsTo('App\Step');
    }
    public function user()
    {
      return $this->belongsTo('App\User');
    }

}

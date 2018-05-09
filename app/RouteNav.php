<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteNav extends Model
{
    //
    protected $table = 'routes';
    protected $guarded = []; 

    public function destination()
    {
      return $this->belongsTo('App\Destination');
    }
}

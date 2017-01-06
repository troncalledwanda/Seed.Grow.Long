<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function images()
    {
    	return $this->hasMany('App/images');
    }
}

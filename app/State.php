<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

		protected $fillable = ['title', 'quote', 'paragraph'];

    public function images()
    {
    	return $this->hasMany('App\Image');
    }
}

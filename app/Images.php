<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public function state()
    {
    	return $this->belongsTo('App/state_id');
    }
}

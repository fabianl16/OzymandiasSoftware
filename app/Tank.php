<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    
   function getLastParameter(){
    return $this->parameters()->orderBy('created_at', 'desc')->first();
    }

    public function parameters()
    {
        return $this->hasMany('App\Parameter', 'Code_tank', 'Tank_code');
    }
    
    
}

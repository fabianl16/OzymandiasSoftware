<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    //
    
    public function parameters()
    {
        return $this->belongsTo('App\Parameter');
    }
}

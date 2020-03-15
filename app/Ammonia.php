<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ammonia extends Model
{
    //
    public function parameter()
    {
        return $this->belongsTo('App\Parameter');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    //
    public function Tanks()
    {
        return $this->HasMany('App\Tank', 'Tank_code');
    }
    public function Ammonia()
    {
        return $this->HasMany('App\Ammonia');
    }
}

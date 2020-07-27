<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    public function styles()
    {
        return $this->hasMany('App\Style');
    }
}

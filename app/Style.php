<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    public function element()
    {
        return $this->belongsTo('App\Element');
    }
}

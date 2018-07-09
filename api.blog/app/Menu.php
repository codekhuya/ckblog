<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menuable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\Users');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /*
    ** Get all of the owning tagable models.
    */
    public function taggable(){
        return $this->morphTo();
    }
}

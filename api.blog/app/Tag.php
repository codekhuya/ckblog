<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name',];
    
    protected $hidden = [
        'pivot','created_at','updated_at'
    ];

    /*
    ** Get all of the owning tagable models.
    */
    public function posts(){
        return $this->morphedByMany('App\Post', 'taggable');
    }
}

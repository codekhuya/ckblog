<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'thumbnail', 'description', 'body', 'published', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function menus(){
        return $this->morphMany('App\Menu','menuable');
    }
}

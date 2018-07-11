<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'thumbnail', 'title', 'body', 'slug', 'description',
        'published', 'view_count', 'share_count',
    ];

    protected $hidden = ['pivot',];

    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function categories(){
        return $this->belongsTo('App\Category', 'category_post','post_id','category_id');
    }

    //Tra ve tat ca comment cua post
    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }

    public function menus(){
        return $this->morphMany('App\Menu','menuable');
    }
    
    //Tra ve tat ca cac tag cua post
    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }
}

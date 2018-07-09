<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id', 'name', 'slug', 'image', 'description',
    ];

    protected $hidden = [
        'pivot', 'created_at', 'updated_at',
    ];

    public function posts(){
        return $this->hasMany('App\Post','category_post','category_id','post_id');
    }

    public function menus(){
        return $this->morphMany('App\Menu','menuable');
    }

    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function parents(){
        return $this->parent()->with('parents');
    }

    public function categories(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function children(){
        return $this->categories()->with('children');
    }
}

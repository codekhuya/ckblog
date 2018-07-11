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

    
    public function parent(){
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function parents(){
        return $this->parent()->with('parents');
    }

    public function menu(){
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function children(){
        return $this->menu()->with('children');
    }
    
}

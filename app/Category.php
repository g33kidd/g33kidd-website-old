<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * Relationship for fetching posts of this category.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }

}

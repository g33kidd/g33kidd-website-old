<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'body', 'published', 'description',
    ];

    /**
     * Relationship for the creator of the post.
     */
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Relationship for categories.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * Relationship for tags.
     */
    public function tags()
    {
        return $this->morphMany('App\Tag', 'taggable');
    }

}

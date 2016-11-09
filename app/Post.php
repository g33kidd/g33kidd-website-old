<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'body', 'published', 'description', 'slug'
    ];

    /**
     * Relationship for the creator of the post.
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
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

    public function getRouteAttrs()
    {
        return [
            'year' => $this->created_at->year,
            'month' => $this->created_at->month,
            'slug' => $this->slug
        ];
    }

}

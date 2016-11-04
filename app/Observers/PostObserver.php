<?php

namespace App\Observers;

use App\Post;
use App\Notifications\PostCreated;

class PostObserver
{

    public function created(Post $post)
    {
        if($post->published) {
            $post->notify(new PostCreated());
        }
    }

}

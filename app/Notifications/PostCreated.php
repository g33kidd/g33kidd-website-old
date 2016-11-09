<?php

namespace App\Notifications;

use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;

class PostCreated extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TwitterChannel::class];
    }

    public function toTwitter(Post $post)
    {
        $post_url = route('post', $post->getRouteAttr);
        $tweet = str_limit($post->description, 114);
        $tweet .= "... {$post_url}";
        return new TwitterStatusUpdate($tweet);
    }
}

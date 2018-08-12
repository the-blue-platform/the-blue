<?php

namespace Blue\Notifications;

use Blue\Entity\Post\PostEntity;
use Blue\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class LikeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $following;
    protected $post;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $following, PostEntity $postEntity)
    {
        $this->following = $following;
        $this->post = $postEntity;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'following_id' => $this->following->id,
            'following_name' => $this->following->getName(),
            'post_id' => $this->post->user_id,
        ];
    }
}

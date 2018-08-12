<?php

namespace Blue\Notifications;

use Blue\Entity\Post\PostEntity;
use Blue\Entity\User\UserEntity;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $following;
    protected $post;

    /**
     * Create a new notification instance.
     *
     * @param UserEntity $following
     * @param PostEntity $post
     */
    public function __construct(UserEntity $following, PostEntity $post)
    {
        $this->following = $following;
        $this->post = $post;
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
            'post_id' => $this->post->id,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'id' => $this->id,
            'read_at' => null,
            'data' => [
                'following_id' => $this->following->id,
                'following_name' => $this->following->getName(),
                'post_id' => $this->post->id,
            ],
        ];
    }
}

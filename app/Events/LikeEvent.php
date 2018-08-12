<?php

namespace Blue\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LikeEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $avatar;
    public $name;
    public $userId;
    public $date;
    public $content;

    /**
     * Create a new event instance.
     *
     * @param $notification
     */
    public function __construct($notification)
    {
        $this->avatar = $notification->avatar;
        $this->name = $notification->name;
        $this->userId = $notification->userId;
        $this->date = \Illuminate\Support\Carbon::parse($notification->date)->diffForHumans();
        $this->content = $notification->content;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['like-channel'];
    }
}

<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 18:34
 */

namespace Blue\Repository\Notification;


use Blue\Domain\Notification\Notification;
use Blue\Infrastructure\Notification\NotificationInfrastructure;
use Blue\Infrastructure\User\UserInfrastructure;
use Blue\Notifications\FollowedNotification;

class NotificationRepository
{
    private $notificationInfra;
    private $userInfra;

    /**
     * NotificationRepository constructor.
     */
    public function __construct()
    {
        $this->notificationInfra = new NotificationInfrastructure();
        $this->userInfra = new UserInfrastructure();
    }

    public function save(Notification $notification)
    {
        $this->notificationInfra->store($notification->userId, $notification->actorId, $notification->content);
    }

    public function findByUserId($userId)
    {
        $notifications = $this->notificationInfra->findByUserId($userId);

        $results = [];

        foreach ($notifications as $notification) {
            array_push($results, NotificationMapper::map($notification));
        }

        return $results;
    }

    public function sendNotification($userId, $follower)
    {
        $user = $this->userInfra->findById($userId);
        $user->notify(new FollowedNotification($follower));
    }

    public function notifications()
    {
        return $this->notificationInfra->notifications();
    }
}
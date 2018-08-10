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

class NotificationRepository
{
    private $notificationInfra;

    /**
     * NotificationRepository constructor.
     */
    public function __construct()
    {
        $this->notificationInfra = new NotificationInfrastructure();
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
}
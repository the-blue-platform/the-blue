<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 18:36
 */

namespace Blue\Repository\Notification;


use Blue\Domain\Notification\Notification;
use Blue\Entity\Notification\NotificationEntity;

class NotificationMapper
{

    public static function map(NotificationEntity $notificationEntity)
    {
        $notification = new Notification($notificationEntity->user_id, $notificationEntity->actor_id,
            $notificationEntity->content);
        $notification->createdAt = $notificationEntity->created_at;
        return $notification;
    }
}
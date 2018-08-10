<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 19:58
 */

namespace Blue\Application\Notification;


use Blue\Data\Notification\NotificationData;
use Illuminate\Support\Facades\Auth;

class NotificationDataMapper
{

    public static function map($notifications, $users)
    {
        $notificationDataList = [];

        $n = count($notifications);
        for ($i = 0; $i < $n; $i++) {
            array_push($notificationDataList,
                new NotificationData($users[$i]->avatar, $users[$i]->getDisplayName(), $users[$i]->id,
                    $notifications[$i]->createdAt, $notifications[$i]->content));
        }

        return $notificationDataList;
    }

    public static function mapDomainToData($notification)
    {
        return new NotificationData
        (
            Auth::user()->avatar,
            Auth::user()->getName(),
            Auth::user()->id,
            now()->toDateString(),
            $notification->content
        );
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/12
 * Time: 15:58
 */

namespace Blue\Http\Controllers\Notification;


use Blue\Application\Notification\NotificationApplication;
use Blue\Http\Controllers\Controller;

class NotificationController extends Controller
{

    public function notifications()
    {
        $notificationApplication = new NotificationApplication();
        return $notificationApplication->notifications();
    }
}
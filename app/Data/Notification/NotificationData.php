<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 19:36
 */

namespace Blue\Data\Notification;


class NotificationData
{
    public $avatar;
    public $name;
    public $userId;
    public $date;
    public $content;

    /**
     * NotificationData constructor.
     * @param $avatar
     * @param $name
     * @param $userId
     * @param $date
     * @param $content
     */
    public function __construct($avatar, $name, $userId, $date, $content)
    {
        $this->avatar = $avatar;
        $this->name = $name;
        $this->userId = $userId;
        $this->date = $date;
        $this->content = $content;
    }
}
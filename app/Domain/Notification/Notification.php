<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 18:35
 */

namespace Blue\Domain\Notification;


class Notification
{

    public $userId;
    public $actorId;
    public $content;
    public $createdAt;

    /**
     * Notification constructor.
     * @param $userId
     * @param $actorId
     * @param $content
     */
    public function __construct($userId, $actorId, $content)
    {
        $this->userId = $userId;
        $this->actorId = $actorId;
        $this->content = $content;
    }
}
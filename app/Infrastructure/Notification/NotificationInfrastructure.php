<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 18:28
 */

namespace Blue\Infrastructure\Notification;


use Blue\Entity\Notification\NotificationEntity;
use Blue\Infrastructure\User\UserInfrastructure;
use Illuminate\Support\Facades\Auth;

class NotificationInfrastructure
{

    private $notificationEntity;

    /**
     * NotificationInfrastructure constructor.
     */
    public function __construct()
    {
        $this->notificationEntity = new NotificationEntity();
    }

    public function store($userId, $actorId, $content)
    {
        NotificationEntity::create([
            'user_id' => $userId,
            'actor_id' => $actorId,
            'content' => $content,
        ]);
    }

    public function findByUserId($userId)
    {
        return $this->notificationEntity->where('user_id', $userId)->orderBy("created_at", "desc")->get();
    }

    public function notifications()
    {
        $userInfra = new UserInfrastructure();
        $user = $userInfra->findById(Auth::user()->id);
        return $user->unreadNotifications()->get()->toArray();
    }
}
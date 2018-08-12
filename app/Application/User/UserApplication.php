<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 16:45
 */

namespace Blue\Application\User;


use Blue\Repository\Notification\NotificationRepository;
use Blue\Repository\User\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserApplication
{
    private $userRepository;
    private $notification;

    /**
     * UserApplication constructor.
     */
    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->notification = new NotificationRepository();
    }

    public function follow($follows_id)
    {
        if (!$this->isFollowing($follows_id)) {
            $this->userRepository->follow($follows_id);
//            $this->notification->sendNotification($follows_id, Auth::user());
            return true;
        } else {
            $this->userRepository->unfollow($follows_id);
            return false;
        }
    }

    public function isFollowing($userId)
    {
        return $this->userRepository->isFollowing($userId);
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 19:39
 */

namespace Blue\Application\Notification;


use Blue\Domain\Notification\Notification;
use Blue\Repository\Comment\CommentRepository;
use Blue\Repository\Notification\NotificationRepository;
use Blue\Repository\User\UserRepository;
use Illuminate\Support\Facades\Auth;

class NotificationApplication
{
    private $notificationRepository;
    private $userRepository;
    private $commentRepository;

    /**
     * NotificationApplication constructor.
     */
    public function __construct()
    {
        $this->notificationRepository = new NotificationRepository();
        $this->userRepository = new UserRepository();
        $this->commentRepository = new CommentRepository();
    }

    public function getNotification()
    {
        $notifications = $this->notificationRepository->findByUserId(Auth::user()->id);

        $users = [];
        foreach ($notifications as $notification) {
            array_push($users, $this->userRepository->findById($notification->actorId));
        }

        return NotificationDataMapper::map($notifications, $users);
    }

    public function storeNotification($commentId)
    {
        $comment = $this->commentRepository->findById($commentId);
        $notification = new Notification(
            $comment->userId,
            Auth::user()->id,
            Auth::user()->getName() . ' liked your comment');

        $this->notificationRepository->save($notification);
        return NotificationDataMapper::mapDomainToData($notification);
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/12
 * Time: 0:43
 */

namespace Blue\Observers\Post;


use Blue\Entity\Post\PostEntity;
use Blue\Notifications\PostNotification;

class PostObserver
{

    public function created(PostEntity $post)
    {
        $user = $post->user;
        foreach ($user->followers as $follower) {
            $follower->notify(new PostNotification($user, $post));
        }
    }
}
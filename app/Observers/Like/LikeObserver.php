<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 18:33
 */

namespace Blue\Observers\Like;


use Blue\Models\Like;

class LikeObserver
{

    public function liked(Like $post)
    {
        $user = $post->user();
        foreach ($user->followers as $follower) {
            $follower->notify(new NewPost($user, $post));
        }
    }
}
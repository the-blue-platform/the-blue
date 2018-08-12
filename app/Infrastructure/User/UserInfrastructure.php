<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:53
 */

namespace Blue\Infrastructure\User;


use Blue\Entity\Follower\FollowerEntity;
use Blue\Entity\User\UserEntity;
use Illuminate\Support\Facades\Auth;

class UserInfrastructure
{

    private $userEntity;
    private $followerEntity;

    /**
     * UserInfrastructure constructor.
     */
    public function __construct()
    {
        $this->userEntity = new UserEntity();
        $this->followerEntity = new FollowerEntity();
    }

    public function findById($id)
    {
        return $this->userEntity->where('id', $id)->first();
    }

    public function findByIdList($ids)
    {
        return $this->userEntity->whereIn('id', $ids)->get();
    }

    public function follow($userId)
    {
        $this->followerEntity->create([
            'user_id' => Auth::user()->id,
            'follows_id' => $userId,
        ]);
    }

    public function unfollow($follows_id)
    {
        $this->followerEntity->where("user_id", Auth::user()->id)->where("follows_id", $follows_id)->delete();
    }

    public function isFollowing($follows_id)
    {
        return $this->followerEntity->where('user_id', Auth::user()->id)->where('follows_id',
            $follows_id)->first();
    }
}
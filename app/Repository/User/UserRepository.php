<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:48
 */

namespace Blue\Repository\User;


use Blue\Infrastructure\User\UserInfrastructure;

class UserRepository
{

    private $userInfrastructure;

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        $this->userInfrastructure = new UserInfrastructure();
    }


    public function findById($userId)
    {
        $userEntity = $this->userInfrastructure->findById($userId);

        return $userEntity ? UserMapper::map($userEntity) : null;
    }

    public function findByUserIdList($userIdList)
    {
        return UserMapper::mapList($userEntity = $this->userInfrastructure->findByIdList($userIdList));
    }

    public function follow($follows_id)
    {
        $this->userInfrastructure->follow($follows_id);
    }

    public function unfollow($follows_id)
    {
        $this->userInfrastructure->unfollow($follows_id);
    }

    public function isFollowing($userId)
    {
        return $this->userInfrastructure->isFollowing($userId);
    }
}
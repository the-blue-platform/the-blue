<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:53
 */

namespace Blue\Infrastructure\User;


use Blue\Entity\User\UserEntity;

class UserInfrastructure
{

    private $userEntity;

    /**
     * UserInfrastructure constructor.
     */
    public function __construct()
    {
        $this->userEntity = new UserEntity();
    }

    public function findById($id)
    {
        return $this->userEntity->where('id', $id)->first();
    }

    public function findByIdList($ids)
    {
        return $this->userEntity->whereIn('id', $ids)->get();
    }
}
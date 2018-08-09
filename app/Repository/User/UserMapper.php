<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:49
 */

namespace Blue\Repository\User;


use Blue\Domain\User\User;
use Blue\Entity\User\UserEntity;

class UserMapper
{

    public static function map(UserEntity $userEntity)
    {
        return new User(
            $userEntity->id,
            $userEntity->email,
            $userEntity->first_name,
            $userEntity->last_name,
            $userEntity->location,
            $userEntity->avatar,
            $userEntity->work
        );
    }

    public static function mapList($userEntities)
    {
        $users = [];

        foreach ($userEntities as $user) {
            array_push($users,
                new User($user->id, $user->email, $user->first_name, $user->last_name, $user->location, $user->avatar,
                    $user->work));
        }

        return $users;
    }
}
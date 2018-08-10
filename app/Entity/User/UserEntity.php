<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:49
 */

namespace Blue\Entity\User;


use Illuminate\Database\Eloquent\Model;

class UserEntity extends Model
{
    protected $table = 'users';
    protected $connection = 'mysql_user';

    public function notification()
    {
        return $this->hasOne('Blue\Entity\Notification\NotificationEntity');
    }
}
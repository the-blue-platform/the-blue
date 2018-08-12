<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:49
 */

namespace Blue\Entity\User;


use Blue\Entity\Post\PostEntity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserEntity extends Model
{
    use Notifiable;

    protected $table = 'users';
    protected $connection = 'mysql_user';

    public function notification()
    {
        return $this->hasOne('Blue\Entity\Notification\NotificationEntity');
    }

    public function followers()
    {
        return $this->belongsToMany(self::class, 'followers', 'follows_id', 'user_id')
            ->withTimestamps();
    }

    public function follows()
    {
        return $this->belongsToMany(self::class, 'followers', 'user_id', 'follows_id')
            ->withTimestamps();
    }

    public function posts()
    {
        return $this->hasMany(PostEntity::class);
    }

    public function getName()
    {
        return "{$this -> first_name} {$this -> last_name}";
    }
}
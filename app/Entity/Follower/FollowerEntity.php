<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/12
 * Time: 13:56
 */

namespace Blue\Entity\Follower;


use Blue\Entity\User\UserEntity;
use Illuminate\Database\Eloquent\Model;

class FollowerEntity extends Model
{
    protected $table = 'followers';
    protected $connection = 'mysql_user';

    protected $fillable = [
        'user_id',
        'follows_id',
    ];

    public function user()
    {
        return $this->belongsTo(UserEntity::class);
    }
}
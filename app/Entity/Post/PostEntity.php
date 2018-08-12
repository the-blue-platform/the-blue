<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 22:25
 */

namespace Blue\Entity\Post;


use Blue\Entity\User\UserEntity;
use Illuminate\Database\Eloquent\Model;

class PostEntity extends Model
{
    protected $table = 'posts';
    protected $connection = 'mysql_user';

    protected $fillable = [
        'user_id',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(UserEntity::class);
    }
}
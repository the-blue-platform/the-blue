<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 18:25
 */

namespace Blue\Entity\Notification;


use Illuminate\Database\Eloquent\Model;

class NotificationEntity extends Model
{
    protected $table = 'notification';
    protected $connection = 'mysql_news';

    protected $fillable = [
        'user_id',
        'actor_id',
        'content',
    ];

}
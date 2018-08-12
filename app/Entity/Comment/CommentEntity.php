<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/08
 * Time: 23:16
 */

namespace Blue\Entity\Comment;


use Illuminate\Database\Eloquent\Model;

class CommentEntity extends Model
{
    protected $table = 'comment';
    protected $connection = 'mysql_news';

    public function news()
    {
        return $this->belongsTo('Blue\Entity\News\NewsEntity', 'news_id', 'news_id');
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 12:15
 */

namespace Blue\Models;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $connection = 'mysql_news';

    protected $fillable = [
        'user_id', 'news_id', 'parent_id', 'body',
    ];

    public function user()
    {
        return $this->belongsTo('Blue\Models\User', 'user_id');
    }

    public function getComments($newsId)
    {
        return $this->where("news_id", $newsId)->where('parent_id', null)->get();
    }

    public function getSubComments($newsId)
    {
        return $this->where("news_id", $newsId)->whereNotNull('parent_id')->get();
    }

    public function getLikes()
    {
        $like = new Like();
        return $like->getCommentLike($this->id);
    }
}
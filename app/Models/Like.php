<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 17:10
 */

namespace Blue\Models;


use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'like';
    protected $connection = 'mysql_news';

    protected $fillable = [
        'user_id', 'news_id', 'comment_id',
    ];

    public function user()
    {
        return $this->belongsTo('Blue\Models\User', 'user_id');
    }

    public function getLikes($newsId)
    {
        return $this->where("news_id", $newsId)->where('comment_id', null)->get();
    }

    public function getCommentLikes($newsId)
    {
        return $this->where("news_id", $newsId)->whereNotNull('comment_id')->get();
    }

    public function getCommentLike($commentId)
    {
        return $this->where("comment_id", $commentId)->get();
    }

    public function isNewsLikedByUser($userId, $newsId)
    {
        $likes = $this->where("user_id", $userId)->where("news_id", $newsId)->whereNull("comment_id");
        return $likes->count() != 0 ? $likes->first()->get() : null;
    }

    public function isCommentLikedByUser($userId, $newsId, $commentId)
    {
        $likes = $this->where("user_id", $userId)->where("news_id", $newsId)->where("comment_id", $commentId);;
        return $likes->count() != 0 ? $likes->first()->get() : null;
    }

    public function dislikeNews($userId, $newsId)
    {
        $this->where("user_id", $userId)->where("news_id", $newsId)->whereNull("comment_id")->delete();
    }

    public function dislikeComment($userId, $newsId, $commentId)
    {
        $this->where("user_id", $userId)->where("news_id", $newsId)->where("comment_id", $commentId)->delete();
    }
}
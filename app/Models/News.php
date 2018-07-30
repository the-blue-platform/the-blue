<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/25
 * Time: 22:22
 */

namespace Blue\Models;

use Blue\Models\View\View;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';
    protected $connection = 'mysql_news';

    public function getHeadlineNews()
    {
        $date = new Carbon();
        $date->subWeek();

        return $this->join('view', 'view.news_id', '=', 'news.news_id')
            ->where('publish_date', '>', $date->toDateTimeString())
            ->orderBy("view.view", "desc")
            ->take(3)
            ->get();
    }

    public function getTrendingNews()
    {
        $date = new Carbon();
        $date->subWeek();

        return $this->join('view', 'view.news_id', '=', 'news.news_id')
            ->where('publish_date', '>', $date->toDateTimeString())
            ->orderBy("view.view", "desc")
            ->skip(3)
            ->take(9)
            ->get();
    }

    public function getById($newsId)
    {
        return $this->where('news_id', $newsId)->first();
    }

    public function getLatestNews($supplierID)
    {
        return $this->where('supplier_id', $supplierID)->where('id', '!=', $this->id)->orderBy('publish_date', 'desc')->take(20)->get();
    }

    public static function find($newsId)
    {
        return News::where('news_id', $newsId)->first();
    }

    public function comments()
    {
        $comment = new Comment();
        return $comment->getComments($this->news_id);
    }

    public function subComments()
    {
        $comment = new Comment();
        return $comment->getSubComments($this->news_id);
    }

    public function likes()
    {
        $like = new Like();
        return $like->getLikes($this->news_id);
    }

    public function commentLikes()
    {
        $like = new Like();
        return $like->getCommentLikes($this->news_id);
    }

    public function views()
    {
        return View::getViews($this->news_id);
    }

    public function getRelatedNews()
    {
        return $this->where('tag', $this->tag)->where('id', '!=', $this->id)->orderBy('publish_date', 'desc')->take(12)->get();
    }
}
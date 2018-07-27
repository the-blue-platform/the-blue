<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 18:12
 */

namespace Blue\Models\View;


use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $table = 'view';
    protected $connection = 'mysql_news';

    protected $fillable = [
        'news_id',
    ];

    public static function getViews($newsId)
    {
        $view = View::where('news_id', $newsId)->first();
        return $view != null ? $view->view : 0;
    }

    public static function increaseView($newsId)
    {
        View::where('news_id', $newsId)->increment('view');
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/02
 * Time: 22:13
 */

namespace Blue\Infrastructure\News;


use Blue\Entity\News\NewsEntity;
use Carbon\Carbon;

class NewsInfrastructure
{

    private $newsEntity;

    /**
     * NewsInfrastructure constructor.
     */
    public function __construct()
    {
        $this->newsEntity = new NewsEntity();
    }

    public function getHeadlineNews()
    {
        $date = new Carbon();
        $date->subWeek();

        return $this->newsEntity->join('view', 'view.news_id', '=', 'news.news_id')
            ->where('publish_date', '>', $date->toDateTimeString())
            ->orderBy("view.view", "desc")
            ->take(6)
            ->get();
    }

    public function getRecommendationNews()
    {
        $date = new Carbon();
        $date->subWeek();

        $news = $this->newsEntity->join('view', 'view.news_id', '=', 'news.news_id')
            ->crossJoin('comment', 'comment.news_id', '=', 'news.news_id')
            ->where('publish_date', '>', $date->toDateTimeString())
            ->orderBy("view.view", "desc")
            ->select('news.news_id', 'news.supplier_id', 'news.title', 'news.content', 'news.image',
                'news.publish_date')
            ->get();

        return $news->unique('news_id')->take(4);
    }

    public function getTechnologyNews()
    {
        $date = new Carbon();
        $date->subWeek();

        $news = $this->newsEntity->join('view', 'view.news_id', '=', 'news.news_id')
            ->join('comment', 'comment.news_id', '=', 'news.news_id')
            ->where('publish_date', '>', $date->toDateTimeString())
            ->where('supplier_id', '10')
            ->orderBy("view.view", "desc")
            ->select('news.news_id', 'news.supplier_id', 'news.title', 'news.content', 'news.image',
                'news.publish_date')
            ->get();

        return $news->unique('news_id')->take(4);
    }

    public function getBusinessNews()
    {
        $date = new Carbon();
        $date->subWeek();

        $news = $this->newsEntity->join('view', 'view.news_id', '=', 'news.news_id')
            ->join('comment', 'comment.news_id', '=', 'news.news_id')
            ->where('news.publish_date', '>', $date->toDateTimeString())
            ->where('news.supplier_id', '4')
            ->orderBy("view.view", "desc")
            ->select('news.news_id', 'news.supplier_id', 'news.title', 'news.content', 'news.image',
                'news.publish_date')
            ->get();

        return $news->unique('news_id')->take(4);
    }

    public function getScienceNews()
    {
        $date = new Carbon();
        $date->subWeek();

        $news = $this->newsEntity->join('view', 'view.news_id', '=', 'news.news_id')
            ->crossJoin('comment', 'comment.news_id', '=', 'news.news_id')
            ->where('publish_date', '>', $date->toDateTimeString())
            ->where('supplier_id', '5')
            ->orderBy("view.view", "desc")
            ->select('news.news_id', 'news.supplier_id', 'news.title', 'news.content', 'news.image',
                'news.publish_date')
            ->get();

        return $news->unique('news_id')->take(4);
    }
}
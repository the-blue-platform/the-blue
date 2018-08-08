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
}
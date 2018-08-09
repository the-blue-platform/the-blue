<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/31
 * Time: 23:32
 */


namespace Blue\Repository\News;


use Blue\Domain\News\NewsCollection;
use Blue\Infrastructure\News\NewsInfrastructure;

class NewsRepository
{

    private $newsInfrastructure;

    /**
     * NewsRepository constructor.
     */
    public function __construct()
    {
        $this->newsInfrastructure = new NewsInfrastructure();
    }

    public function getHeadlineNews()
    {
        $newsEntity = $this->newsInfrastructure->getHeadlineNews();
        $newsCollection = new NewsCollection([]);
        foreach ($newsEntity as $news) {
            $newsCollection->add(NewsMapper::map($news));
        }

        return $newsCollection;
    }

    public function getRecommendationNews()
    {
        $newsEntity = $this->newsInfrastructure->getRecommendationNews();
        $newsCollection = new NewsCollection([]);
        foreach ($newsEntity as $news) {
            $newsCollection->add(NewsMapper::map($news));
        }

        return $newsCollection;
    }
}
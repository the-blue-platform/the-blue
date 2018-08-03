<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/31
 * Time: 23:32
 */


namespace Blue\Repository\News;


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
        return $this->newsInfrastructure->getHeadlineNews();
    }
}
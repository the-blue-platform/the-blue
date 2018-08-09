<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/31
 * Time: 23:32
 */


namespace Blue\Repository\News;


use Blue\Domain\News\NewsCollection;
use Blue\Infrastructure\Comment\CommentInfrastructure;
use Blue\Infrastructure\News\NewsInfrastructure;
use Blue\Infrastructure\User\UserInfrastructure;

class NewsRepository
{

    private $newsInfrastructure;
    private $userInfrastructure;
    private $commentInfrastructure;

    /**
     * NewsRepository constructor.
     */
    public function __construct()
    {
        $this->newsInfrastructure = new NewsInfrastructure();
        $this->userInfrastructure = new UserInfrastructure();
        $this->commentInfrastructure = new CommentInfrastructure();
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
        $newsEntities = $this->newsInfrastructure->getRecommendationNews();

        $recommendationNews = [];
        foreach ($newsEntities as $news) {
            $userComment = $this->userInfrastructure->findById($news->comments()->first()->user_id);
            $userLikes = $this->userInfrastructure->findByIdList($news->likes()->select('user_id')->get());
            $comment = $this->commentInfrastructure->findByUserIdAndNewsId($userComment->id, $news->news_id);

            array_push($recommendationNews,
                NewsMapper::mapRecommendationNews($news, $userComment, $userLikes, $comment));
        }

        return $recommendationNews;
    }
}
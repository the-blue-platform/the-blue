<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/02
 * Time: 22:59
 */

namespace Blue\Repository\News;


use Blue\Domain\News\News;
use Blue\Domain\News\RecommendationNews;
use Blue\Entity\News\NewsEntity;
use Blue\Repository\Comment\CommentMapper;
use Blue\Repository\User\UserMapper;

class NewsMapper
{

    public static function map(NewsEntity $newsEntity)
    {
        return new News(
            $newsEntity->news_id,
            $newsEntity->supplier_id,
            $newsEntity->title,
            $newsEntity->content,
            $newsEntity->link,
            $newsEntity->image,
            $newsEntity->tag,
            $newsEntity->publish_date
        );
    }

    public static function mapRecommendationNews(NewsEntity $newsEntity, $userComment, $userLikes, $comment)
    {
        return new RecommendationNews(
            $newsEntity->news_id,
            $newsEntity->supplier_id,
            $newsEntity->title,
            $newsEntity->content,
            $newsEntity->link,
            $newsEntity->image,
            $newsEntity->tag,
            $newsEntity->publish_date,
            UserMapper::map($userComment),
            UserMapper::mapList($userLikes),
            CommentMapper::map($comment)
        );
    }
}
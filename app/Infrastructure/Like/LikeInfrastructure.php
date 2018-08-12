<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/08
 * Time: 22:54
 */

namespace Blue\Infrastructure\Like;


use Blue\Entity\Like\LikeEntity;

class LikeInfrastructure
{

    private $likeEntity;

    /**
     * LikeInfrastructure constructor.
     */
    public function __construct()
    {
        $this->likeEntity = new LikeEntity();
    }

    public function getLikesByNewsId($newsId)
    {
        return $this->likeEntity->where("news_id", $newsId)->where('comment_id', null)->get();
    }
}
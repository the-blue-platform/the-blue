<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/08
 * Time: 23:06
 */

namespace Blue\Repository\Like;


use Blue\Domain\Like\Like;
use Blue\Entity\Like\LikeEntity;

class LikeMappner
{

    public static function map(LikeEntity $likeEntity)
    {
        return new Like(
            $likeEntity->user_id,
            $likeEntity->news_id,
            $likeEntity->comment_id,
            $likeEntity->created_date
        );
    }

    public static function mapList($likeEntities)
    {
        $likes = [];
        foreach ($likeEntities as $likeEntity) {
            array_push($likes, self::map($likeEntity));
        }

        return $likes;
    }
}
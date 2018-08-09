<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/08
 * Time: 23:17
 */

namespace Blue\Repository\Comment;


use Blue\Domain\Comment\Comment;
use Blue\Entity\Comment\CommentEntity;

class CommentMapper
{

    public static function map(CommentEntity $commentEntity)
    {
        return new Comment(
            $commentEntity->id,
            $commentEntity->user_id,
            $commentEntity->news_id,
            $commentEntity->parent_id,
            $commentEntity->body,
            $commentEntity->created_date
        );
    }

    public static function mapList($commentEntities)
    {
        $comments = [];
        foreach ($commentEntities as $commentEntity) {
            array_push($comments, self::map($commentEntity));
        }

        return $comments;
    }
}
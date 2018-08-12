<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 23:14
 */

namespace Blue\Repository\Post;


use Blue\Domain\Post\Post;
use Blue\Entity\Post\PostEntity;

class PostMapper
{
    public static function mapList($postEntities)
    {
        $posts = [];
        foreach ($postEntities as $postEntity) {
            array_push($posts, self::map($postEntity));
        }

        return $posts;
    }

    public static function map(PostEntity $postEntity)
    {
        $post = new Post(
            $postEntity->user_id,
            $postEntity->content
        );
        $post->setCreatedDate($postEntity->created_at);

        return $post;
    }
}
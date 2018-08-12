<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 23:16
 */

namespace Blue\Application\Post;


use Blue\Data\Post\PostData;
use Blue\Domain\Post\Post;

class PostDataMapper
{
    public static function map($posts)
    {
        $postDataList = [];

        foreach ($posts as $post) {
            array_push($postDataList, self::mapDomainToData($post));
        }

        return $postDataList;
    }

    public static function mapDomainToData(Post $post)
    {
        return new PostData
        (
            $post->getUserId(),
            $post->getContent(),
            $post->getCreatedDate()
        );
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/02
 * Time: 22:59
 */

namespace Blue\Repository\News;


use Blue\Domain\News\News;

class NewsMapper
{

    public static function map($newsEntity)
    {
        return new News(
            $newsEntity->news_id,
            $newsEntity->supplier_id,
            $newsEntity->title,
            $newsEntity->content,
            $newsEntity->link,
            $newsEntity->image,
            $newsEntity->tag,
            $newsEntity->publish_date);
    }
}
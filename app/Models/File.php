<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/26
 * Time: 23:26
 */

namespace Blue\Models;


class File
{
    public static function get($supplierId, $newsId)
    {
        return file_get_contents(self::supplier($supplierId) . $newsId . "/article.html");
    }

    public static function supplier($supplierId)
    {
        switch ($supplierId) {
            case 3:
                return "/data/news/vnexpress/";
                break;
        }
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 22:31
 */

namespace Blue\Data\Post;


class PostData
{
    public $userId;
    public $content;
    public $createdDate;

    /**
     * PostData constructor.
     * @param $userId
     * @param $content
     * @param $createdDate
     */
    public function __construct($userId, $content, $createdDate)
    {
        $this->userId = $userId;
        $this->content = $content;
        $this->createdDate = $createdDate;
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/08
 * Time: 22:43
 */

namespace Blue\Domain\Comment;


class Comment
{
    public $id;
    public $userId;
    public $newsId;
    public $parentId;
    public $body;
    public $createdDate;

    /**
     * Comment constructor.
     * @param $id
     * @param $userId
     * @param $newsId
     * @param $parentId
     * @param $body
     * @param $createdDate
     */
    public function __construct($id, $userId, $newsId, $parentId, $body, $createdDate)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->newsId = $newsId;
        $this->parentId = $parentId;
        $this->body = $body;
        $this->createdDate = $createdDate;
    }
}
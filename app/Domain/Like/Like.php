<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/08
 * Time: 22:42
 */

namespace Blue\Domain\Like;


class Like
{

    private $userId;
    private $newsId;
    private $commentId;
    private $createdDate;

    /**
     * Like constructor.
     * @param $userId
     * @param $newsId
     * @param $commentId
     * @param $createdDate
     */
    public function __construct($userId, $newsId, $commentId, $createdDate)
    {
        $this->userId = $userId;
        $this->newsId = $newsId;
        $this->commentId = $commentId;
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * @return mixed
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
}
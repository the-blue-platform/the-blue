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
    private $id;
    private $newsId;
    private $parentId;
    private $body;
    private $createdDate;

    /**
     * Comment constructor.
     * @param $id
     * @param $newsId
     * @param $parentId
     * @param $body
     * @param $createdDate
     */
    public function __construct($id, $newsId, $parentId, $body, $createdDate)
    {
        $this->id = $id;
        $this->newsId = $newsId;
        $this->parentId = $parentId;
        $this->body = $body;
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
}
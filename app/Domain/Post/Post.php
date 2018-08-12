<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 22:30
 */

namespace Blue\Domain\Post;


class Post
{

    private $userId;
    private $content;
    private $createdDate;

    /**
     * Post constructor.
     * @param $userId
     * @param $content
     * @param $createdDate
     */
    public function __construct($userId, $content)
    {
        $this->userId = $userId;
        $this->content = $content;
    }

    /**
     * @param mixed $createdDate
     */
    public function setCreatedDate($createdDate): void
    {
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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/31
 * Time: 23:25
 */

namespace Blue\Domain\News;


class News
{
    public $id;
    public $supplierId;
    public $title;
    public $content;
    public $link;
    public $image;
    public $tag;
    public $publishDate;

    public $likes;
    public $comments;

    /**
     * News constructor.
     * @param $id
     * @param $supplierId
     * @param $title
     * @param $content
     * @param $link
     * @param $image
     * @param $tag
     * @param $publishDate
     * @param $likes
     * @param $comments
     */
    public function __construct(
        $id,
        $supplierId,
        $title,
        $content,
        $link,
        $image,
        $tag,
        $publishDate,
        $likes,
        $comments
    ) {
        $this->id = $id;
        $this->supplierId = $supplierId;
        $this->title = $title;
        $this->content = $content;
        $this->link = $link;
        $this->image = $image;
        $this->tag = $tag;
        $this->publishDate = $publishDate;
        $this->likes = $likes;
        $this->comments = $comments;
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
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @return mixed
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @return mixed
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }
}
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
        $publishDate
    ) {
        $this->id = $id;
        $this->supplierId = $supplierId;
        $this->title = $title;
        $this->content = $content;
        $this->link = $link;
        $this->image = $image;
        $this->tag = $tag;
        $this->publishDate = $publishDate;
    }
}
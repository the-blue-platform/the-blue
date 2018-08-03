<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/31
 * Time: 23:28
 */

namespace Blue\Domain;


class Tag
{
    private $tag;

    /**
     * Tag constructor.
     * @param $tag
     */
    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }
}
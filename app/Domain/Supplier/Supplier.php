<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/30
 * Time: 15:00
 */

namespace Blue\Domain\Supplier;


class Supplier
{
    private $id;
    private $name;
    private $url;
    private $tag;
    private $avatar;
    private $description;

    /**
     * Supplier constructor.
     * @param $id
     * @param $name
     * @param $url
     * @param $tag
     * @param $avatar
     * @param $description
     */
    public function __construct($id, $name, $url, $tag, $avatar, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->tag = $tag;
        $this->avatar = $avatar;
        $this->description = $description;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
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
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function getTags()
    {

    }
}
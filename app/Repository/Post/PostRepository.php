<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 22:37
 */

namespace Blue\Repository\Post;


use Blue\Domain\Post\Post;
use Blue\Infrastructure\Post\PostInfrastructure;

class PostRepository
{

    private $postInfrastructure;

    /**
     * PostRepository constructor.
     */
    public function __construct()
    {
        $this->postInfrastructure = new PostInfrastructure();
    }

    public function createPost(Post $post)
    {
        $this->postInfrastructure->createPost($post->getUserId(), $post->getContent());
    }

    public function getPosts($userId)
    {
        return PostMapper::mapList($this->postInfrastructure->posts($userId));
    }
}
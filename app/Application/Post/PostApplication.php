<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 22:40
 */

namespace Blue\Application\Post;


use Blue\Domain\Post\Post;
use Blue\Repository\Post\PostRepository;

class PostApplication
{

    private $postRepository;

    /**
     * PostApplication constructor.
     */
    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function createPost(Post $post)
    {
        $this->postRepository->createPost($post);
    }

    public function getPosts($userId)
    {
        return PostDataMapper::map($this->postRepository->getPosts($userId));
    }
}
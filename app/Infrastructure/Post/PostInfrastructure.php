<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 22:33
 */

namespace Blue\Infrastructure\Post;


use Blue\Entity\Post\PostEntity;

class PostInfrastructure
{

    private $postEntity;

    /**
     * PostInfrastructure constructor.
     */
    public function __construct()
    {
        $this->postEntity = new PostEntity();
    }

    public function createPost($userId, $content)
    {
        $this->postEntity->create([
            'user_id' => $userId,
            'content' => $content,
        ]);
    }

    public function posts($userId)
    {
        return $this->postEntity->where('user_id', $userId)->orderBy("created_at", "desc")->get();
    }
}
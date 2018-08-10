<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 15:17
 */

namespace Blue\Infrastructure\Comment;


use Blue\Entity\Comment\CommentEntity;

class CommentInfrastructure
{
    private $commentEntity;

    /**
     * CommentInfrastructure constructor.
     */
    public function __construct()
    {
        $this->commentEntity = new CommentEntity();
    }

    public function findByUserIdAndNewsId($userId, $newsId)
    {
        return $this->commentEntity->where('user_id', $userId)->where('news_id', $newsId)->first();
    }

    public function findById($id)
    {
        return $this->commentEntity->find($id);
    }
}
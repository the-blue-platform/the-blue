<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/10
 * Time: 18:50
 */

namespace Blue\Repository\Comment;


use Blue\Infrastructure\Comment\CommentInfrastructure;

class CommentRepository
{

    private $commentInfra;

    /**
     * CommentRepository constructor.
     */
    public function __construct()
    {
        $this->commentInfra = new CommentInfrastructure();
    }

    public function findById($id)
    {
        return CommentMapper::map($this->commentInfra->findById($id));
    }
}
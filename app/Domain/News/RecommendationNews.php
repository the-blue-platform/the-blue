<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 13:13
 */

namespace Blue\Domain\News;


use Blue\Domain\Comment\Comment;
use Blue\Domain\User\User;

class RecommendationNews extends News
{

    public $commentUser;
    public $likeUsers;
    public $comment;

    public function __construct(
        $id,
        $supplierId,
        $title,
        $content,
        $link,
        $image,
        $tag,
        $publishDate,
        User $commentUser,
        $likeUsers,
        Comment $comment
    ) {
        parent::__construct($id, $supplierId, $title, $content, $link, $image, $tag, $publishDate);
        $this->commentUser = $commentUser;
        $this->likeUsers = $likeUsers;
        $this->comment = $comment;
    }

    public function getComment()
    {
        return $this->comment->body;
    }

    public function getCommentUserName()
    {
        return $this->commentUser->getDisplayName();
    }
}
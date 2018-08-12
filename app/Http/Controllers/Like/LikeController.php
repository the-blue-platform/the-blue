<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 17:04
 */

namespace Blue\Http\Controllers\Like;


use Blue\Application\Notification\NotificationApplication;
use Blue\Events\LikeEvent;
use Blue\Http\Controllers\Controller;
use Blue\Models\Like;
use Blue\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class LikeController extends Controller
{
    public function likeNews($newsId)
    {
        $news = News::find($newsId);

        if (!$news) {
            return redirect()->back();
        }

        if (Auth::user()->isNewsLiked($newsId)) {
            $like = new Like();
            $like->dislikeNews(Auth::user()->id, $newsId);
        } else {
            Like::create([
                'user_id' => Auth::user()->id,
                'news_id' => $newsId,
            ])->user()->associate(Auth::user());
        }

        $likeNum = $news->likes()->count();
        return response()->json([
            'status' => 'OK',
            "like_num" => $likeNum
        ]);
    }

    public function likeComment($newsId, $commentId)
    {
        $news = News::find($newsId);
        $like = new Like();
        $notificationApplication = new NotificationApplication();

        if (!$news) {
            return redirect()->back();
        }
        if (Auth::user()->isCommentLiked($newsId, $commentId)) {
            $like = new Like();
            $like->dislikeComment(Auth::user()->id, $newsId, $commentId);
        } else {
            Like::create([
                'user_id' => Auth::user()->id,
                'news_id' => $newsId,
                'comment_id' => $commentId,
            ])->user()->associate(Auth::user());

            $notification = $notificationApplication->storeNotification($commentId);
            Event::fire(new LikeEvent($notification));
        }

        return response()->json([
            'status' => 'OK',
            "comment_like" => $like->getCommentLike($commentId)->count()
        ]);
    }
}
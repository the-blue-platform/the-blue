<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 17:04
 */

namespace Blue\Http\Controllers\Like;


use Blue\Http\Controllers\Controller;
use Blue\Models\Like;
use Blue\Models\News;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likeNews($newsId)
    {
        $news = News::find($newsId);

        if (!$news) {
            return redirect()->back();
        }

        Like::create([
            'user_id' => Auth::user()->id,
            'news_id' => $newsId,
        ])->user()->associate(Auth::user());

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

        if (!$news) {
            return redirect()->back();
        }

        Like::create([
            'user_id' => Auth::user()->id,
            'news_id' => $newsId,
            'comment_id' => $commentId,
        ])->user()->associate(Auth::user());

        return response()->json([
            'status' => 'OK',
            "comment_like" => $like->getCommentLike($commentId)->count()
        ]);
    }
}
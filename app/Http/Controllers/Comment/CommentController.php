<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 12:11
 */

namespace Blue\Http\Controllers\Comment;


use Blue\Http\Controllers\Controller;
use Blue\Models\News;
use Blue\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function commentNews(Request $request, $newsId)
    {
        $news = News::find($newsId);

        if (!$news) {
            return redirect()->back();
        }

        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'news_id' => $newsId,
            'body' => $request->input("comment"),
        ])->user()->associate(Auth::user());


//        return response()->json([
//            'status' => 'OK'
//        ]);
        return view("component.comment.news-comment-block")
            ->with('comment', $comment)
            ->with("subComments", [])
            ->with("article", $news);

    }

    public function comment(Request $request, $newsId, $commentId)
    {
        $news = News::find($newsId);

        if (!$news) {
            return redirect()->back();
        }

        Comment::create([
            'user_id' => Auth::user()->id,
            'news_id' => $newsId,
            'parent_id' => $commentId,
            'body' => $request->input("comment"),
        ])->user()->associate(Auth::user());

        return response()->json([
            'status' => 'OK'
        ]);
    }
}
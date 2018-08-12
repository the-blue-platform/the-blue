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
use Illuminate\Support\Facades\View;
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

        return response()->json([
            "view" => View::make("component.news.news-comment")
                ->with('comment', $comment)
                ->with("subComments", [])
                ->with("article", $news)
                ->render(),
            "viewCounts" => $news -> comments() -> count() + $news -> subComments() -> count()
        ]);
    }

    public function comment(Request $request, $newsId, $commentId)
    {
        $news = News::find($newsId);

        if (!$news) {
            return redirect()->back();
        }

        $subComment = Comment::create([
            'user_id' => Auth::user()->id,
            'news_id' => $newsId,
            'parent_id' => $commentId,
            'body' => $request->input("comment"),
        ])->user()->associate(Auth::user());

//        return view("component.comment.news-subcomment-block")
//            ->with("subComment", $subComment)
//            ->with("article", $news);

        return response()->json([
            "view" => View::make("component.comment.news-subcomment-block")
                ->with("subComment", $subComment)
                ->with("article", $news)
                ->render(),
            "viewCounts" => $news -> comments() -> count() + $news -> subComments() -> count()
        ]);
    }
}
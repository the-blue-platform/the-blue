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
use Blue\Models\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function commentNews(Request $request, $newsId)
    {

        $this->validate($request, [
            "comment-{$newsId}" => 'required|max:1000',
        ], [
            'required' => 'The comment content is required']);

        $news = News::find($newsId);

        if (!$news) {
            return redirect()->back();
        }

        NewsComment::create([
            'user_id' => Auth::user()->id,
            'news_id' => $newsId,
            'body' => $request->input("comment-{$newsId}"),
        ])->user()->associate(Auth::user());

        return redirect()->back();
    }
}
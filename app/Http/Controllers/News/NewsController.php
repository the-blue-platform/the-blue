<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/26
 * Time: 17:48
 */

namespace Blue\Http\Controllers\News;


use Blue\Http\Controllers\Controller;
use Blue\Models\File;
use Blue\Models\News;
use Blue\Models\Supplier;
use Blue\Models\View\View;

class NewsController extends Controller
{
    public function index($newsId)
    {
        $news = new News();
        $supplier = new Supplier();
        $article = $news->getById($newsId);

        if (!$article) {
            return redirect()->back();
        }

        $comments = $article->comments();
        $subComments = $article->subComments();
        $likes = $article->likes();
        $commentLikes = $article->commentLikes();
        $trending_news = $article->getLatestNews($article->supplier_id);
        $relatedNews = $article->getRelatedNews();

        if ($article->views() == 0) {
            View::create([
                'news_id' => $newsId,
            ]);
        } else {
            View::increaseView($newsId);
        }

        return view('component.news.news')
            ->with('article', $article)
            ->with('content', File::get($article->supplier_id, $article->news_id))
            ->with('supplier', $supplier->get($article->supplier_id))
            ->with('comments', $comments)
            ->with('subComments', $subComments)
            ->with('likes', $likes)
            ->with('commentLikes', $commentLikes)
            ->with('trending_news', $trending_news)
            ->with('relatedNews', $relatedNews);
    }

    public function getLatestNews($supplier_id)
    {
        $news = new News();
        $trending_news = $news->getLatestNews($supplier_id);

        return view('component.home.trending-news')
            ->with('trending_news', $trending_news);
    }
}
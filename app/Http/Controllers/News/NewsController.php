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

class NewsController extends Controller
{
    public function index($newsId)
    {
        $news = new News();
        $article = $news->getById($newsId);

        return view('component.news.news')
            ->with('article', $article)
            ->with('content', File::get($article->supplier_id, $article->news_id))
            ->with('trending_left', $news->getTrendingNewsLeft());
    }
}
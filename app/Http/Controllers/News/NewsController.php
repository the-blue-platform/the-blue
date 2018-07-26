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

class NewsController extends Controller
{
    public function index($newsId)
    {
        $news = new News();
        $supplier = new Supplier();
        $article = $news->getById($newsId);
        $latestNews = $news -> getLatestNews($article -> supplier_id);

        return view('component.news.news')
            ->with('article', $article)
            ->with('content', File::get($article->supplier_id, $article->news_id))
            ->with('supplier', $supplier->get($article->supplier_id))
            ->with('supplier', $supplier->get($article->supplier_id))
            ->with('latestNews', $latestNews);
    }
}
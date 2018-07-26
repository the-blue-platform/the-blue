<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/26
 * Time: 17:48
 */

namespace Blue\Http\Controllers\News;


use Blue\Http\Controllers\Controller;
use Blue\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $headline = new News();
        return view('component.news.news')
            ->with('headline', $headline->getHeadlineNews())
            ->with('trending_left', $headline->getTrendingNewsLeft());;
    }
}
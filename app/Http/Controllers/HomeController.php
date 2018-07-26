<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/12
 * Time: 1:15
 */

namespace Blue\Http\Controllers;


use Blue\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $headline = new News();
        return view('home')
            ->with('headline', $headline->getHeadlineNews())
            ->with('trending_left', $headline->getTrendingNewsLeft());
    }
}
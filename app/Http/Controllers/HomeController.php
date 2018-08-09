<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/12
 * Time: 1:15
 */

namespace Blue\Http\Controllers;


use Blue\Models\News;
use Blue\Repository\News\NewsRepository;

class HomeController extends Controller
{
    public function index()
    {
        $headline = new News();
        $newsRepository = new NewsRepository();

        return view('home2')
            ->with('headline', $newsRepository->getHeadlineNews())
            ->with('trending_news', $headline->getTrendingNews())
            ->with('recommendation', $newsRepository->getRecommendationNews())
            ->with('technology', $headline->getTechnologyNews())
            ->with('business', $headline->getBusinessNews())
            ->with('science', $headline->getScienceNews());
    }

    public function getTrendingPost()
    {
        $headline = new News();

        return view('component.home.trending-news')
            ->with('trending_news', $headline->getTrendingNews());
    }
}
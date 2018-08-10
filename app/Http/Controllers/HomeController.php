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
use Blue\Repository\User\UserRepository;

class HomeController extends Controller
{
    public function index()
    {
        $headline = new News();
        $newsRepository = new NewsRepository();

//        dd($newsRepository->getBusinessNews());

        $recommendation = $newsRepository->getRecommendationNews();
        return view('home2')
            ->with('headline', $newsRepository->getHeadlineNews())
            ->with('trending_news', $headline->getTrendingNews())
            ->with('recommendation', $recommendation)
            ->with('technology', $newsRepository->getTechnologyNews())
            ->with('business', $newsRepository->getBusinessNews())
            ->with('science', $newsRepository->getScienceNews());
    }

    public function getTrendingPost()
    {
        $headline = new News();

        return view('component.home.trending-news')
            ->with('trending_news', $headline->getTrendingNews());
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/12
 * Time: 1:15
 */

namespace Blue\Http\Controllers;


use Blue\Application\Notification\NotificationApplication;
use Blue\Models\News;
use Blue\Repository\News\NewsRepository;

class HomeController extends Controller
{
    public function index()
    {
        $headline = new News();
        $newsRepository = new NewsRepository();
        $notificationApplication = new NotificationApplication();

        $recommendation = $newsRepository->getRecommendationNews();
        $notifications = $notificationApplication->getNotification();

        return view('home2')
            ->with('headline', $newsRepository->getHeadlineNews())
            ->with('trending_news', $headline->getTrendingNews())
            ->with('recommendation', $recommendation)
            ->with('technology', $newsRepository->getTechnologyNews())
            ->with('business', $newsRepository->getBusinessNews())
            ->with('science', $newsRepository->getScienceNews())
            ->with('notifications', $notifications);
    }

    public function getTrendingPost()
    {
        $headline = new News();

        return view('component.home.trending-news')
            ->with('trending_news', $headline->getTrendingNews());
    }
}
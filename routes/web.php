<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

/**
 * Authentication
 */
Route::get('/signup', [
    'uses' => 'Auth\SignupController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);

Route::post('/signup', [
    'uses' => 'Auth\SignupController@postSignup',
    'middleware' => ['guest'],
]);

Route::get('/signin', [
    'uses' => 'Auth\SigninController@getSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],
]);

Route::post('/signin', [
    'uses' => 'Auth\SigninController@postSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],
]);

Route::get('/signout', [
    'uses' => 'Auth\SignoutController@signout',
    'as' => 'auth.signout',
]);

/**
 * Localization
 */

Route::get('/location/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

/**
 * News
 */

Route::get('/news/{newsId}', [
    'uses' => 'News\NewsController@index',
    'as' => 'news',
]);

Route::get('/update/trendingnews', [
    'uses' => 'HomeController@getTrendingPost',
    'as' => 'update.trendingnews',
]);

Route::get('/update/latest/{supplier_id}', [
    'uses' => 'News\NewsController@getLatestNews',
    'as' => 'update.latest',
]);

/**
 * Comment
 */
Route::post('/news/{newsId}/comment', [
    'uses' => 'Comment\CommentController@commentNews',
    'as' => 'news.comment',
    'middleware' => ['auth'],
]);

Route::post('/comment/{newsId}/{commentId}/comment', [
    'uses' => 'Comment\CommentController@comment',
    'as' => 'comment.comment',
    'middleware' => ['auth'],
]);

/**
 * Like
 */
Route::post('/news/{newsId}/like', [
    'uses' => 'Like\LikeController@likeNews',
    'as' => 'news.like',
    'middleware' => ['auth'],
]);

Route::post('/like/{newsId}/{commentId}/like', [
    'uses' => 'Like\LikeController@likeComment',
    'as' => 'comment.like',
    'middleware' => ['auth'],
]);

/**
 * Supplier
 */

Route::get('/supplier/{newsId}', [
    'uses' => 'Supplier\SupplierController@index',
    'as' => 'supplier',
]);


Route::get('/supplier/supplier/update/{resourceId}/{tag}', [
    'uses' => 'Supplier\SupplierController@getPopularNews',
    'as' => 'supplier.update',
]);


/**
 * User page
 */
Route::get('/user/{userId}', [
    'uses' => 'User\UserController@index',
    'as' => 'user',
]);

Route::post('/user/follow/{userId}', [
    'uses' => 'User\UserController@follow',
    'as' => 'user.follow',
]);

Route::post('/user/profile', 'User\UserController@updateAvatar');

Route::get('/notifications', [
    'uses' => 'Notification\NotificationController@notifications',
    'as' => 'notifications',
]);


/**
 * Post
 */
Route::post('/user/post', [
    'uses' => 'Post\PostController@store',
    'as' => 'user.post',
    'middleware' => ['auth'],
]);
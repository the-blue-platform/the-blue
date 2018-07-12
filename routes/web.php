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

Route::get('{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});
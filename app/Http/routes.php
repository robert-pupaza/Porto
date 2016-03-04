<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'pages.home', 'uses' => 'PageController@showHome']);
Route::get('/services', ['as' => 'pages.services', 'uses' => 'PageController@showServices']);
Route::get('/portfolio', ['as' => 'pages.portfolio', 'uses' => 'PageController@showPortfolio']);
Route::get('/about-work', ['as' => 'pages.aboutWork', 'uses' => 'PageController@showAboutWork']);
Route::get('/about-me', ['as' => 'pages.aboutMe', 'uses' => 'PageController@showAboutMe']);
Route::get('/contact', ['as' => 'pages.contact', 'uses' => 'PageController@showContact']);

Route::get('/project1', ['as' => 'ajax.porfolio-ajax-project-1', 'uses' => 'AjaxController@showProject1']);
Route::get('/project2', ['as' => 'ajax.porfolio-ajax-project-2', 'uses' => 'AjaxController@showProject2']);
Route::get('/project3', ['as' => 'ajax.porfolio-ajax-project-3', 'uses' => 'AjaxController@showProject3']);
Route::get('/project4', ['as' => 'ajax.porfolio-ajax-project-4', 'uses' => 'AjaxController@showProject4']);
Route::get('/project5', ['as' => 'ajax.porfolio-ajax-project-5', 'uses' => 'AjaxController@showProject5']);
Route::get('/project6', ['as' => 'ajax.porfolio-ajax-project-6', 'uses' => 'AjaxController@showProject6']);
Route::get('/project7', ['as' => 'ajax.porfolio-ajax-project-7', 'uses' => 'AjaxController@showProject7']);



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

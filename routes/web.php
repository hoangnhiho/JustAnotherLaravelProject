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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'FrontendController@frontPage');
Route::get('/aboutus', 'FrontendController@aboutus');
Route::get('/buy', 'FrontendController@buy');
Route::get('/sell', 'FrontendController@sell');
Route::get('/rent', 'FrontendController@rent');
Route::get('/migration', 'FrontendController@migration');
Route::get('/aboutus', 'FrontendController@aboutus');
Route::get('/press_market', 'FrontendController@pressMarket');
Route::get('/press_mag', 'FrontendController@pressMag');
Route::get('/press_news', 'FrontendController@pressNews');
Route::get('/press_research', 'FrontendController@pressResearch');
Route::get('/press_video', 'FrontendController@pressVideo');
Route::get('/press_event', 'FrontendController@pressEvent');
Route::get('/press_room', 'FrontendController@pressRoom');
Route::get('/press_promo', 'FrontendController@pressPromo');
Route::post('/press_promo', 'FrontendController@emailPressPromo');


Route::resource('projects', 'ProjectsController');
Route::resource('listings', 'ListingsController');
Route::post('career/{careerId}', 'CareersController@store');
Route::resource('career', 'CareersController');
Auth::routes();

Route::get('/home', 'HomeController@index');

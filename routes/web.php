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
Route::get('/press_news', 'FrontendController@pressNew');
Route::get('/press_research', 'FrontendController@pressResearch');
Route::get('/press_video', 'FrontendController@pressVideo');
Route::get('/press_event', 'FrontendController@pressEvent');

Route::get('/career', function () {
    return view('frontend.career');
});

Route::resource('projects', 'ProjectsController');
Route::resource('listings', 'ListingsController');
Auth::routes();

Route::get('/home', 'HomeController@index');

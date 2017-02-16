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

Route::get('/', function () {
    return view('frontend.frontPage');
});
Route::get('/buy', function () {
    return view('frontend.buy');
});

Route::get('/sell', function () {
    return view('frontend.sell');
});

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});

Route::get('/career', function () {
    return view('frontend.career');
});

Route::get('/rent', function () {
    return view('frontend.rent');
});

Route::get('/migration', function () {
    return view('frontend.migration');
});

Route::resource('projects', 'ProjectsController');
Route::resource('listings', 'ListingsController');
Auth::routes();

Route::get('/home', 'HomeController@index');

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

//frontend

Route::get('/', 'FrontendController@index');

Route::get('/ourservices', 'FrontendController@ourservices');
Route::get('/about', 'FrontendController@about');
Route::get('/contacts', 'FrontendController@contacts');
Route::get('/productions', 'FrontendController@productions');
Route::get('/all-news', 'FrontendController@news');

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('version', function(){
	return App::version();
});


Auth::routes();

//backend

Route::get('/admin', 'HomeController@index');

Route::resource('pages', 'PageController');
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');


Route::resource('blocks', 'BlocksController');

Route::resource('services', 'servicesController');

Route::resource('advantages', 'advantagesController');

Route::resource('sliders', 'slidersController');

Route::resource('news', 'newsController');

Route::resource('products', 'ProductController');
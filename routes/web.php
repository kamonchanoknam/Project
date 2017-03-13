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
Route::get('index','SiteController@index');

Route::get('suggest','SuggestController@suggest');

Route::get('calendar','CalendarController@calendar');

//Route::get('search','SearchController@search');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/index','SiteController');

//Route::resource('/adindex','AdindexController');


Route::get('/adindex', function () {
    return view('adminindex');
});



Route::get('/suggest', function () {
    return view('suggest');
});

Route::resource('/adcalen','AdcalenController');


Route::resource('/calendar','CalendarController');

Route::resource('/search', 'SearchController');

Route::post('/search', 'SearchController@search');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/userpro', function () {
    return view('userprofile');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

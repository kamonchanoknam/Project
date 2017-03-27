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

Route::resource('suggest','SuggestController');

Route::get('calendar','CalendarController@calendar');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/index','SiteController');

Route::get('/xml', function () {
    return view('maps_xml');
});




Route::resource('/adindexshow','AdindexController');




Route::resource('/adcalen','AdcalenController');
Route::post('/adcalen', 'AdcalenController@store');
Route::post('/adcalen', 'AdcalenController@addact');
Route::post('/adcalen', 'AdcalenController@update');


Route::resource('/calendar','CalendarController');

Route::resource('/search', 'SearchController');
Route::post('/search', 'SearchController@search');

Route::resource('/adtemppro', 'AdmintempleprofileController');

Route::resource('/adminpro', 'AdminprofileController');


Route::get('/home', 'HomeController@index');


Route::get('/home', 'HomeController@index');



Route::get('/home', 'HomeController@index');

Route::post('/adindex', 'AdindexController@login');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('/addstaff','AddstaffController');
Route::post('/addstaff', 'AddstaffController@store');



Route::resource('/addtemple','AddtempleController');

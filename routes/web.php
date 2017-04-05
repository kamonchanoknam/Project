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

Route::get('suggest','SuggestController@index');
Route::get('suggest/xml','SuggestController@xml_response')->name('suggest_xml');;

Route::get('calendar','CalendarController@calendar');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/index','SiteController');

// Route::get('/xml', function () {
//     return view('maps_xml');
// });




Route::resource('/adindexshow','AdindexController');
Route::post('/adindex', 'AdindexController@login');



Route::resource('/adcalen','AdcalenController');
Route::post('/adcalen/event', 'AdcalenController@addevent');
Route::post('/adcalen/act', 'AdcalenController@addact');



Route::resource('/calendar','CalendarController');

Route::resource('/search', 'SearchController');
Route::post('/search', 'SearchController@search');

Route::resource('/adtemppro', 'AdmintempleprofileController');


Route::resource('/adminpro', 'AdminprofileController');



Route::get('/home', 'HomeController@index');


Route::get('/home', 'HomeController@index');



Route::get('/home', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('/addstaff','AddstaffController');
Route::post('/addstaff', 'AddstaffController@store');



Route::resource('/addtemple','AddtempleController');

Route::resource('/managestaff','ManagestaffController');
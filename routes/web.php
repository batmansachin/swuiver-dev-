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
Route::get('/','SiteController@index')->name('index');
Route::get('/table','SiteController@table')->name('table');
Route::get('/image_status_list','SiteController@image_status_list')->name('image_status_list');
Route::get('/album_form','SiteController@album_form')->name('album_form');
Route::get('/add_topics','SiteController@add_topics')->name('add_topics');
Route::post('/submitquery','SiteController@submitquery')->name('submitquery');
Route::post('/submitquery_topics','MasterTopicsController@submitquery_topics')->name('submitquery_topics');

//Debate related query
Route::get('/debate_list','DebatesController@debate_list')->name('debate_list');
Route::post('/submitQuery_debate','DebatesController@submitQuery_debate')->name('submitQuery_debate');
Route::get('/add_debate','DebatesController@add_debate')->name('add_debate');
Route::get('/debate_argument','DebatesController@debate_argument')->name('debate_argument');
Route::post('/submitQuery_debate_argument','DebatesController@submitQuery_debate_argument')->name('submitQuery_debate_argument');

Route::get('/User_profile','UserController@User_profile')->name('User_profile');
Route::post('/submitQuery_User_profile','UserController@submitQuery_User_profile')->name('submitQuery_User_profile');

//Route::get('/panels','SiteController@panels')->name('panels');
//Route::get('dashbord', 'DashbordController@index');
  //  Auth::routes();
  //Route::get('/home', 'HomeController@index')->name('home');
  //  Route::get('/about', 'HomeController@about')->name('about');
  //  Route::get('/logout', 'HomeController@getLogout')->name('logout');

//Route::get('/','SiteController@index')->name('index');
//Route::get('/','SiteController@index')->name('index');
//Route::get('panels', function () {
	
  //  return view('panels');
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

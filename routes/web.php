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

Route::get('/', 'PageController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//update programs
Route::get('/program/show', 'ProgramController@index');
Route::get('/programs/create/', 'ProgramController@create');
Route::POST('/program/store/', 'ProgramController@store');
Route::get('/program/edit/{id}', 'ProgramController@edit');
Route::POST('/program/update/{id}', 'ProgramController@update');
Route::delete('program/destroy/{id}', 'ProgramController@program_destroy');
Route::get('/events/', 'PageController@our_church_event_view');

//set time
Route::get('program/settime/', 'ProgramController@create_time');
Route::POST('/program/upload_time', 'ProgramController@upload_the_time');
Route::get('/program/countdown/', 'ProgramController@count_down');

//update partnership
Route::get('/partnership/show/', 'ProgramController@partnership_index');
Route::get('/partnership/create/', 'ProgramController@partnership_create');
Route::POST('/partnership/store/', 'ProgramController@partnership_store');
Route::get('/partnership/edit/{id}', 'ProgramController@partnership_edit');
Route::post('partnership/update/{id}', 'ProgramController@partnership_update');
Route::delete('partnership/destroy/{id}', 'ProgramController@partnership_destroy');
Route::get('/partnership/', 'PageController@our_partners_view');

//update footer
Route::get('/footer/show/', 'ProgramController@footer_index');
Route::get('/footer/create/', 'ProgramController@footer_create');
Route::POST('/footer/store/', 'ProgramController@footer_store');
Route::get('/footer/edit/{id}', 'ProgramController@footer_edit');
Route::post('footer/update/{id}', 'ProgramController@footer_update');
Route::delete('footer/destroy/{id}', 'ProgramController@footer_destroy');

//update contact us
Route::get('/contact_us/show/', 'ProgramController@contact_us_index');
Route::get('/contact_us/create/', 'ProgramController@contact_us_create');
Route::POST('/contact_us/store/', 'ProgramController@contact_us_store');
Route::get('/contact_us/edit/{id}', 'ProgramController@contact_us_edit');
Route::post('contact_us/update/{id}', 'ProgramController@contact_us_update');
Route::delete('contact_us/destroy/{id}', 'ProgramController@contact_us_destroy');
Route::get('/locations/', 'PageController@our_church_location');
Route::get('/contact/', 'PageController@our_contact_view');
Route::get('/create/location/', 'ProgramController@create_location');
Route::post('/store/location/', 'ProgramController@store_location');

//update about us
Route::get('/about_us/show/', 'ProgramController@about_us_index');
Route::get('/about_us/create/', 'ProgramController@about_us_create');
Route::POST('/about_us/store/', 'ProgramController@about_us_store');
Route::get('/about_us/edit/{id}', 'ProgramController@about_us_edit');
Route::post('about_us/update/{id}', 'ProgramController@about_us_update');
Route::delete('about_us/destroy/{id}', 'ProgramController@about_us_destroy');
Route::get('/about/', 'PageController@about_us_view');

//update media
Route::get('/media/show/', 'ProgramController@media_index');
Route::get('/media/create/', 'ProgramController@media_create');
Route::POST('/media/store/', 'ProgramController@media_store');
Route::get('/media/edit/{id}', 'ProgramController@media_edit');
Route::post('media/update/{id}', 'ProgramController@media_update');
Route::delete('media/destroy/{id}', 'ProgramController@media_destroy');
Route::get('/media/', 'PageController@our_church_media');

//update homepage
Route::get('/home/show/', 'ProgramController@home_index');
Route::get('/home/create/', 'ProgramController@home_create');
Route::POST('/home/store/', 'ProgramController@home_store');
Route::get('/home/edit/{id}', 'ProgramController@home_edit');
Route::post('home/update/{id}', 'ProgramController@home_update');
Route::delete('home/destroy/{id}', 'ProgramController@home_destroy');
Route::get('/lastest_release_category/', 'ProgramController@home_category');
Route::post('/lastest_release_category/store', 'ProgramController@home_category_store');
Route::get('/front_page_banner/', 'ProgramController@home_banner_create');
Route::post('/home/banner/store/', 'ProgramController@home_banner_store');
Route::get('/home/media/homepage/', 'ProgramController@add_media_to_home_page');
Route::post('/media/', 'ProgramController@store_media_to_home_page');

//add menu
Route::get('/menu/show/', 'ProgramController@menu_index');
Route::get('/menu/create/', 'ProgramController@menu_create');
Route::POST('/menu/store/', 'ProgramController@menu_store');
Route::get('/menu/edit/{id}', 'ProgramController@menu_edit');
Route::post('menu/update/{id}', 'ProgramController@menu_update');
Route::delete('menu/destroy/{id}', 'ProgramController@menu_destroy');

//edit account
Route::get('/user/edit/{id}', 'ProgramController@user_edit');
Route::post('/user/update/{id}', 'ProgramController@user_update');

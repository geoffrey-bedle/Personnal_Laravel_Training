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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post','PostController');

Route::get('post/create', 'PostController@create')->name('post.create')->middleware('auth');

//--------------------------------------------------------------------------------
 Route::get('/', 'PostController@index')->name('post.index');//OU
//app('router')->get('/', 'PostController@index')->name('post.index');
//--------------------------------------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/{post}/delete','PostController@destroy')->name('post.delete');

Route::post('post/{post}:delete','PostController@destroy')->name('post.destroy');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('contact/send', 'ContactController@send')->name('send');

Route::get('contact','ContactController@contactForm')->name('contact');


Route::get('dashboard/{post}/delete', 'DashboardController@destroy')->name('user.destroy');

Route::get('dashboard/{user}/{name}', 'DashboardController@show')->name('user.dashboard')->middleware('auth');

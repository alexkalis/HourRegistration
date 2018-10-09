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
Route::get('/send/email', 'HomeController@mail');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', 'UserController@showUser');

Route::get('/HourRegistration', function(){
    return View::make('HourRegistration');
});
// Route::post('form-submit', array);
Route::get('/hour', 'HourController@index');
Route::resource('/hour', 'HourController');

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
Route::get('login', array('uses' => 'UserController@showLogin'));
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('register', array('uses' => 'UserController@showRegister'));
Route::post('login', array('uses' => 'UserController@doLogin'));
//
Route::get('/search', 'queryController@search');
// Route::resource('queries', 'QueryController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

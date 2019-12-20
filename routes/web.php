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
//routes for view
Route::get('/', function () {
    return view('index');
});
Route::get('/registration', function () {
	return view('registration');	
});
Route::get('/registration-successful', function () {
	return view('registration-successful');	
});
Route::get('/user-exist', function () {
	return view('user-exist');	
});
Route::get('/contact', function () {
	return view('contact');	
});
Route::get('/plan', function () {
	return view('plan');	
});
Route::get('/reward', function () {
	return view('reward');	
});
Route::get('/gallery', function () {
	return view('gallary');	
});
Route::get('index','Auth\RegisterController@index')->name('index');

Route::get('registration','Auth\RegisterController@registrationView')->name('registration');

Route::post('registration','Auth\RegisterController@registration')->name('validation');

Route::post('contactus','Auth\RegisterController@contactus')->name('contactus');
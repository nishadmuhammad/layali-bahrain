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

//Front end routes
Route::get('/', function (){return view('front.welcome');})->name('home');
Route::post('/enquiry','front\EnquiryController@store');

//Auth Routes
Auth::routes();

//Admin End Routes
Route::get('/admin', 'admin\HomeController@index')->name('home');
Route::resource('/admin/post','admin\PostController')->only(['index','create','store','destroy','edit','update']);
Route::resource('/admin/enquiry','admin\EnquiryController')->only(['index','destroy']);



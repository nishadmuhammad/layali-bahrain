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
Route::get('/', 'front\HomeController@index')->name('home');
Route::post('/enquiry','front\EnquiryController@store')->name('enquire');
Route::get('/about-us',function (){return view('front.about');})->name('about');
Route::get('/services',function (){return view('front.services.index');})->name('services');
Route::get('/portfolio',function (){return view('front.portfolio');})->name('portfolio');
Route::get('/blog','front\BlogController@index')->name('blog');
Route::get('/blog/{slug}','front\BlogController@show')->name('showBlog');
Route::get('/contact/',function (){return view('front.contact');})->name('contact');
//Auth Routes
Auth::routes();

//Admin End Routes
Route::get('/admin', 'admin\HomeController@index')->name('adminHome');
Route::resource('/admin/post','admin\PostController')->only(['index','create','store','destroy','edit','update']);
Route::resource('/admin/enquiry','admin\EnquiryController')->only(['index','destroy']);
Route::get('/admin/bulkDelete/{id}','admin\EnquiryController@bulkDelete')->name('bulkDelete');
Route::resource('/admin/testimonial','admin\TestimonialController')->only(['index','create','store','edit','update','destroy']);


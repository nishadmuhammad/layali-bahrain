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
Route::get('/services',function (){return view('front.services.index');})->name('services');
Route::get('/portfolio','front\HomeController@showPortfolios')->name('portfolio');
Route::get('/about-us','front\StaffController@index')->name('about');
Route::get('/blog','front\BlogController@index')->name('blog');
Route::get('/blog/{slug}','front\BlogController@show')->name('showBlog');
Route::get('/careers','front\CareerController@index')->name('careers');
Route::get('/careers/{slug}','front\CareerController@show')->name('careersShow');
Route::get('/contact/',function (){return view('front.contact');})->name('contact');
Route::get('/services/{slug}','front\ServiceController@show')->name('servicesShow');
Route::post('/subscribe','front\SubscriptionController@subscribe')->name('subscribe');
Route::post('/application','front\CareerController@store')->name('application');

//Auth Routes
Auth::routes();

//Admin End Routes
Route::get('/admin', 'admin\HomeController@index')->name('adminHome');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('/admin/post','admin\PostController')->only(['index','create','store','destroy','edit','update']);
    Route::resource('/admin/enquiry','admin\EnquiryController')->only(['index','destroy']);
    Route::get('/admin/bulkDelete/{id}','admin\EnquiryController@bulkDelete')->name('bulkDelete');
    Route::resource('/admin/testimonial','admin\TestimonialController')->only(['index','create','store','edit','update','destroy']);
    Route::resource('/admin/opening','admin\OpeningController')->only(['index','create','store','edit','update','destroy']);
    Route::resource('/admin/service','admin\ServiceController')->only(['index','create','store','edit','update','destroy']);
    Route::resource('/admin/application','admin\ApplicationController')->only(['index','create','store','edit','update','destroy']);
    Route::resource('user','admin\UserRoleController')->only(['index','edit','update','create','store','destroy']);
    Route::resource('role', 'admin\RoleController')->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);
    Route::resource('/admin/portfolio','admin\PortfolioController')->only(['index','create','store','edit','update','destroy']);
    Route::resource('/admin/staff','admin\StaffController')->only(['index','create','store','edit','update','destroy']);
    Route::resource('/admin/flayer','admin\FlayerController')->only(['index','create','store','edit','update','destroy']);

    Route::get('/gallery','front\GalleryController@index')->name('gallery.index');

});
Route::resource('password','admin\PasswordController')->only(['edit','update']);



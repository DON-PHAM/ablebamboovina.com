<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

//Route::get('/', function () {
//    return view('welcome');
//})->name('home');
Route::get('/', 'Main\Homecontroller@index')->name('homepage');
Route::get('change_language/{language}','Dashboard\HomeController@changLanguage')
    ->name('change-language');
Route::group(['middleware'=>['locale','checkLoggedIn']],function() {
    Route::post('/login','LoginController@login')->name('post-login');
    Route::get('/login','LoginController@show')->name('login');

});
Route::get('logout','LoginController@logout')->name('logout');

Route::get('shop', 'Main\ShopController@index')->name('shop-page');
Route::get('detail/{id}', 'Main\DetailController@index')->name('detail-page');
Route::get('contact', 'Main\ContactController@index')->name('contact-page');
Route::post('contact/postCreate','Main\ContactController@postCreate')->name('post-contact-create');


Route::group(['prefix'=>'dashboard','middleware'=>['locale','checkAuth']],function () {

    Route::get('/','Dashboard\HomeController@index')->name('admin');

    //User management
    Route::get('users','Dashboard\UserController@index')->name('user');
    Route::get('users/create','Dashboard\UserController@create')->name('user-create');
    Route::post('users/postCreate','Dashboard\UserController@postCreate')->name('post-user-create');
    Route::get('users/edit/{id}','Dashboard\UserController@edit')->name('get-user-edit');
    Route::post('users/edit/{id}','Dashboard\UserController@postEdit')->name('put-user-edit');
    Route::get('users/delete/{id}','Dashboard\UserController@delete')->name('delete-user');
    Route::get('profile','Dashboard\UserController@profile')->name('get-profile');
    Route::post('post-profile','Dashboard\UserController@postProfile')->name('post-profile');

    //Category Product Management
    Route::get('category','Dashboard\CategoryProductController@index')->name('category-list');
    Route::get('category/create','Dashboard\CategoryProductController@create')->name('get-category-create');
    Route::post('category/postCreate','Dashboard\CategoryProductController@postCreate')->name('post-category-create');
    Route::get('category/edit/{id}','Dashboard\CategoryProductController@edit')->name('get-category-edit');
    Route::post('category/edit/{id}','Dashboard\CategoryProductController@update')->name('put-category-edit');
    Route::get('category/delete/{id}','Dashboard\CategoryProductController@delete')->name('delete-category-edit');

    //Product Management
    Route::get('product','Dashboard\ProductController@index')->name('product-list');
    Route::get('product/create','Dashboard\ProductController@create')->name('get-product-create');
    Route::post('product/postCreate','Dashboard\ProductController@postCreate')->name('post-product-create');
    Route::get('product/edit/{id}','Dashboard\ProductController@edit')->name('get-product-edit');
    Route::post('product/edit/{id}','Dashboard\ProductController@update')->name('put-product-edit');
    Route::get('product/delete/{id}','Dashboard\ProductController@delete')->name('delete-product');
    Route::get('product/changestatus/{id}','Dashboard\ProductController@changeStatus')->name('change-status-product');
    Route::get('product/changeProductHot/{id}','Dashboard\ProductController@changeProductHot')->name('change-producthot-product');
    Route::get('product/deleteImage/{idimage}','Dashboard\ProductController@deleteImage')->name('delete-image');

    //New Management
    Route::get('new','Dashboard\NewController@index')->name('new-list');
    Route::get('new/create','Dashboard\NewController@create')->name('get-new-create');
    Route::post('new/postCreate','Dashboard\NewController@postCreate')->name('post-new-create');
    Route::get('new/edit/{id}','Dashboard\NewController@edit')->name('get-new-edit');
    Route::post('new/edit/{id}','Dashboard\NewController@update')->name('put-new-edit');
    Route::get('new/delete/{id}','Dashboard\NewController@delete')->name('delete-new-edit');

    //Setting Management
    Route::get('setting','Dashboard\SettingController@create')->name('get-setting-create');
    Route::post('setting/create/{id}','Dashboard\SettingController@CreateOrUpdate')->name('post-setting-create');


    //Slider Management
    Route::get('slider','Dashboard\SliderController@index')->name('slider-list');
    Route::get('slider/create','Dashboard\SliderController@create')->name('get-slider-create');
    Route::post('slider/postCreate','Dashboard\SliderController@postCreate')->name('post-slider-create');
    Route::get('slider/edit/{id}','Dashboard\SliderController@edit')->name('get-slider-edit');
    Route::post('slider/edit/{id}','Dashboard\SliderController@update')->name('post-slider-edit');
    Route::get('slider/delete/{id}','Dashboard\SliderController@delete')->name('delete-slider');
    Route::get('slider/changestatus/{id}','Dashboard\SliderController@changeStatus')->name('change-status');

    //Branch
    Route::get('branch','Dashboard\BranchController@index')->name('branch-list');
    Route::post('branch/postCreate','Dashboard\BranchController@postCreate')->name('post-branch-create');
    Route::get('branch/edit/{id}','Dashboard\BranchController@edit')->name('get-branch-edit');
    Route::post('branch/edit/{id}','Dashboard\BranchController@update')->name('post-branch-edit');
    Route::get('branch/delete/{id}','Dashboard\BranchController@delete')->name('delete-branch');

    //Feed Back
    Route::get('feedback','Dashboard\FeedBackController@index')->name('feedback-list');

    //About Management
    Route::get('about','Dashboard\AboutController@index')->name('about');
    Route::get('about/create','Dashboard\AboutController@create')->name('get-about-create');
    Route::post('about/create','Dashboard\AboutController@postCreate')->name('post-about-create');
    Route::get('about/edit/{id}','Dashboard\AboutController@edit')->name('get-about-edit');
    Route::post('about/edit/{id}','Dashboard\AboutController@update')->name('post-about-edit');
    Route::get('about/delete/{id}','Dashboard\AboutController@delete')->name('delete-about');

    //Video Management
    Route::get('video','Dashboard\VideoController@index')->name('video');
    Route::get('video/create','Dashboard\VideoController@create')->name('get-video-create');
    Route::post('video/create','Dashboard\VideoController@postCreate')->name('post-video-create');
    Route::get('video/edit/{id}','Dashboard\VideoController@edit')->name('get-video-edit');
    Route::post('video/edit/{id}','Dashboard\VideoController@update')->name('post-video-edit');
    Route::get('video/delete/{id}','Dashboard\VideoController@delete')->name('delete-video');
    Route::get('video/changeStatus/{id}','Dashboard\VideoController@changeStatus')->name('changeStatus');

    //Event Management
    Route::get('event','Dashboard\EventController@index')->name('event');
    Route::get('event/create','Dashboard\EventController@create')->name('get-event-create');
    Route::post('event/create','Dashboard\EventController@postCreate')->name('post-event-create');
    Route::get('event/edit/{id}','Dashboard\EventController@edit')->name('get-event-edit');
    Route::post('event/edit/{id}','Dashboard\EventController@update')->name('post-event-edit');
    Route::get('event/delete/{id}','Dashboard\EventController@delete')->name('delete-event');
    Route::get('event/changeStatus/{id}','Dashboard\EventController@changeStatus')->name('changeStatus');


});

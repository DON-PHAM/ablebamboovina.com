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
//Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});

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
Route::get('detail', 'Main\DetailController@index')->name('detail-page');


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

    //New Management
    Route::get('new','Dashboard\NewController@index')->name('new-list');
    Route::get('new/create','Dashboard\NewController@create')->name('get-new-create');
    Route::post('new/postCreate','Dashboard\NewController@postCreate')->name('post-new-create');
    Route::get('new/edit/{id}','Dashboard\NewController@edit')->name('get-new-edit');
    Route::post('new/edit/{id}','Dashboard\NewController@update')->name('put-new-edit');
    Route::get('new/delete/{id}','Dashboard\NewController@delete')->name('delete-new-edit');

    //Setting Management
    Route::get('setting','Dashboard\SettingController@index')->name('setting-list');
    Route::get('setting/create','Dashboard\SettingController@create')->name('get-setting-create');
    Route::post('setting/create','Dashboard\SettingController@create')->name('post-setting-create');
    Route::get('setting/edit/{id}','Dashboard\SettingController@edit')->name('get-setting-edit');
    Route::post('setting/edit/{id}','Dashboard\SettingController@edit')->name('put-setting-edit');
    Route::get('setting/delete/{id}','Dashboard\SettingController@delete')->name('delete-setting-edit');

    //Slider Management
    Route::get('slider','Dashboard\SliderController@index')->name('slider-list');
    Route::get('slider/create','Dashboard\SliderController@create')->name('get-slider-create');
    Route::post('slider/postCreate','Dashboard\SliderController@postCreate')->name('post-slider-create');
    Route::get('slider/edit/{id}','Dashboard\SliderController@edit')->name('get-slider-edit');
    Route::post('slider/edit/{id}','Dashboard\SliderController@update')->name('post-slider-edit');
    Route::get('slider/delete/{id}','Dashboard\SliderController@delete')->name('delete-slider');

    //Branch
    Route::get('branch','Dashboard\BranchController@index')->name('branch-list');
    Route::post('branch/postCreate','Dashboard\BranchController@postCreate')->name('post-branch-create');
    Route::get('branch/edit/{id}','Dashboard\BranchController@edit')->name('get-branch-edit');
    Route::post('branch/edit/{id}','Dashboard\BranchController@postEdit')->name('post-branch-edit');
    Route::get('branch/delete/{id}','Dashboard\BranchController@delete')->name('delete-branch-edit');

    //Feed Back
    Route::get('feedback','Dashboard\FeedBackController@index')->name('feedback-list');


});

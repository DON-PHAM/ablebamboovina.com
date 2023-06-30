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

Route::get('/', function () {
    return view('welcome');
});
Route::get('change_language/{language}','Dashboard\HomeController@changLanguage')
    ->name('change-language');
Route::group(['middleware'=>'locale'],function() {
    Route::post('/login','LoginController@login')->name('post-login');
    Route::get('/login','LoginController@show')->name('login');
});




Route::group(['prefix'=>'dashboard','middleware'=>['locale']],function () {

    Route::get('/','Dashboard\HomeController@index')->name('admin');
    Route::get('/logout','LoginController@logout')->name('logout');
    //User management
    Route::get('users','Dashboard\UserController@index')->name('user');
    Route::get('users-list','Dashboard\UserController@getAll')->name('user-list');
    Route::post('users/create','Dashboard\UserController@postCreate')->name('post-user-create');
    Route::get('users/edit/{id}','Dashboard\UserController@edit')->name('get-user-edit');
    Route::post('users/edit/{id}','Dashboard\UserController@postEdit')->name('put-user-edit');
    Route::get('users/delete/{id}','Dashboard\UserController@edit')->name('delete-user-edit');

    //Category Product Management
    Route::get('category','Dashboard\CategoryProductController@index')->name('category-list');
    Route::get('category/create','Dashboard\CategoryProductController@create')->name('get-category-create');
    Route::post('category/create','Dashboard\CategoryProductController@postCreate')->name('post-category-create');
    Route::get('category/edit/{id}','Dashboard\CategoryProductController@edit')->name('get-category-edit');
    Route::post('category/edit/{id}','Dashboard\CategoryProductController@update')->name('put-category-edit');
    Route::delete('category/delete/{id}','Dashboard\CategoryProductController@edit')->name('delete-category-edit');

    //Category Post Management
    Route::get('category-new','Dashboard\CategoryPostController@index')->name('category-new-list');
    Route::get('category-new/create','Dashboard\CategoryPostController@create')->name('get-category-new-create');
    Route::post('category-new/create','Dashboard\CategoryPostController@postCreate')->name('post-category-new-create');
    Route::get('category-new/edit/{id}','Dashboard\CategoryPostController@edit')->name('get-category-new-edit');
    Route::post('category-new/edit/{id}','Dashboard\CategoryPostController@update')->name('put-category-new-edit');
    Route::delete('category-new/delete/{id}','Dashboard\CategoryPostController@edit')->name('delete-category-new-edit');

    //Product Management
    Route::get('product','Dashboard\ProductController@index')->name('product-list');
    Route::get('product/create','Dashboard\ProductController@create')->name('get-product-create');
    Route::post('product/create','Dashboard\ProductController@create')->name('post-product-create');
    Route::get('product/edit/{id}','Dashboard\ProductController@edit')->name('get-product-edit');
    Route::post('product/edit/{id}','Dashboard\ProductController@edit')->name('put-product-edit');
    Route::delete('product/delete/{id}','Dashboard\ProductController@edit')->name('delete-product-edit');

    //New Management
    Route::get('new','Dashboard\NewController@index')->name('new-list');
    Route::get('new/create','Dashboard\NewController@create')->name('get-new-create');
    Route::post('new/create','Dashboard\NewController@create')->name('post-new-create');
    Route::get('new/edit/{id}','Dashboard\NewController@edit')->name('get-new-edit');
    Route::post('new/edit/{id}','Dashboard\NewController@edit')->name('put-new-edit');
    Route::delete('new/delete/{id}','Dashboard\NewController@edit')->name('delete-new-edit');

    //Setting Management
    Route::get('setting','Dashboard\SettingController@index')->name('setting-list');
    Route::get('setting/create','Dashboard\SettingController@create')->name('get-setting-create');
    Route::post('setting/create','Dashboard\SettingController@create')->name('post-setting-create');
    Route::get('setting/edit/{id}','Dashboard\SettingController@edit')->name('get-setting-edit');
    Route::post('setting/edit/{id}','Dashboard\SettingController@edit')->name('put-setting-edit');
    Route::delete('setting/delete/{id}','Dashboard\SettingController@edit')->name('delete-setting-edit');

    //Slider Management
    Route::get('slider','Dashboard\SliderController@index')->name('slider-list');
    Route::get('slider/create','Dashboard\SliderController@create')->name('get-slider-create');
    Route::post('slider/create','Dashboard\SliderController@create')->name('post-slider-create');
    Route::get('slider/edit/{id}','Dashboard\SliderController@edit')->name('get-slider-edit');
    Route::post('slider/edit/{id}','Dashboard\SliderController@edit')->name('put-slider-edit');
    Route::delete('slider/delete/{id}','Dashboard\SliderController@edit')->name('delete-slider-edit');


});

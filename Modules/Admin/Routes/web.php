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
Route::prefix('admin')->group(function() {
    Route::get('/login', 'AdminAuthController@getLogin')->name('admin.login');
    Route::post('/login','AdminAuthController@postLogin');
    Route::get('/logout','AdminAuthController@getLogout')->name('admin.logout');
});

Route::prefix('admin')->middleware('App\Http\Middleware\CheckLoginAdmin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    
    Route::group(['prefix' => 'category'],function (){
       Route::get('/','AdminCategoryController@index')->name('admin.list.category');
       Route::get('/create','AdminCategoryController@create')->name('admin.create.category');
       Route::post('/create','AdminCategoryController@store');
       Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.edit.category');
       Route::post('/update/{id}','AdminCategoryController@update');
       Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.action.category');
    });
    Route::group(['prefix' => 'product'],function (){
        Route::get('/','AdminProductController@index')->name('admin.list.product');
        Route::get('/create','AdminProductController@create')->name('admin.create.product');
        Route::post('/create','AdminProductController@store');
        Route::get('/update/{id}','AdminProductController@edit')->name('admin.edit.product');
        Route::post('/update/{id}','AdminProductController@update');
        Route::get('/{action}/{id}','AdminProductController@action')->name('admin.action.product');

    });
    Route::group(['prefix'=>'order'], function (){
        Route::get('/', 'AdminOrderController@index')->name('admin.list.order');
        Route::get('/detail/{id}','AdminOrderController@orderDetail')->name('admin.detail.order');
        Route::get('/{action}/{id}','AdminOrderController@action')->name('admin.action.order');
    });
    Route::group(['prefix'=>'article'], function (){
        Route::get('/', 'AdminArticleController@index')->name('admin.list.article');
        Route::get('/create','AdminArticleController@create')->name('admin.create.article');
        Route::post('/create','AdminArticleController@store');
        Route::get('/update/{id}','AdminArticleController@edit')->name('admin.edit.article');
        Route::post('/update/{id}','AdminArticleController@update');
        Route::get('/{action}/{id}','AdminArticleController@action')->name('admin.action.article');
    });
    
    //lien he
     Route::group(['prefix' => 'contact'],function (){
        Route::get('/','AdminContactController@index')->name('admin.get.list.contact');
        Route::get('/{action}/{id}','AdminContactController@action')->name('admin.action.contact');
    });
    Route::group(['prefix'=>'rating'], function (){
        Route::get('/', 'AdminRatingController@index')->name('admin.list.rating');
        Route::get('/{action}/{id}','AdminRatingController@action')->name('admin.action.rating');
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('/','AdminUserController@index')->name('admin.list.user');
        Route::get('/{action}/{id}','AdminUserController@action')->name('admin.action.user');
    });
});

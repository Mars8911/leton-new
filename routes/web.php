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
     //首頁
     Route::get('/',[
    'uses' => 'FrontController@index',
    'as' => 'index'  
    ]);


    //關於我們
     Route::get('/aboutus',[
    'uses' => 'FrontController@aboutus',
    'as' => 'aboutus'  
    ]);

     //最新消息
     Route::get('/newsin',[
    'uses' => 'FrontController@news',
    'as' => 'news'  
    ]);


    //最新消息單一頁面
Route::get('news/show/{id}',[
    'uses' => 'FrontController@slugNews',
    'as' => 'slug.news'  
    ]);





        //聯繫我們
     Route::get('/contactus',[
    'uses' => 'FrontController@contactus',
    'as' => 'contactus'  
    ]);




//單一商品

Route::get('category/show/{id}',[
    'uses' => 'FrontController@slugProduct',
    'as' => 'slug.product'  
    ]);






//分類頁面

Route::get('/category/{id}',[
    'uses' => 'FrontController@category',
    'as' => 'slug.category'  
    ]);


    //Tag頁面

Route::get('/tag/product/{id}',[
    'uses' => 'FrontController@tag',
    'as' => 'slug.tag'  
    ]);
    
    







Route::middleware(['auth'])->group( function () {

//首頁訊息
Route::resource('home', 'HomeController');


//首頁圖片
Route::resource('banner', 'BannerController');



//分類
Route::resource('categories','CategoriesController');

//商品
Route::resource('product','ProductController');

//關於我們
Route::resource('about','AboutController');


//聯繫我們
Route::resource('contact','ContactController');


//管理員
Route::resource('users','UsersController');

//管理員
Route::resource('profiles','ProfilesController');

//網站訊息
Route::resource('information','InformationController');

//SEO
Route::resource('seo','SeoController');

//雲標籤
Route::resource('tag','TagController');

//最新消息
Route::resource('news','NewsController');


//開啟管理員路線

Route::get('users/admin/{id}',[

     'uses' =>'UsersController@admin',

     'as' => 'users.admin',

   ]);

   //關閉管理員路線

Route::get('users/not-admin/{id}',[

     'uses' =>'UsersController@not_admin',

     'as' => 'users.not.admin',

   ]);



});





// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('/text',function(){


    return App\User::find(1)->profile;

});




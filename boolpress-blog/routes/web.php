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
    return view('admin.home');
});

//Route::resource("articles", ArticleController::class)->only(["index", "show"]);


Route::get('articles', 'ArticleController@index')->name('articles.index');
Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');

Auth::routes(["register" => false]);

//Route::get('/home', 'Admin\HomeController@index')->name('home');
//Route::resource("articles", Admin\ArticleController::class);


Route::prefix("admin")->middleware("auth")->namespace("Admin")->name("admin.")->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard'); //->admin dash
    Route::resource("articles", ArticleController::class);
});

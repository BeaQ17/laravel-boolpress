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

//Altre pagine, senza modello
Route::get("/", "PageController@index")->name("home");
Route::get("about", "PageController@about")->name("about");

//Con modello Contact
Route::get("contacts", "ContactController@form")->name("contacts");
Route::post("contacts", "ContactController@StoreAndSend")->name("contacts.send");


//Articles per utente guest
Route::get('articles', 'ArticleController@index')->name('articles.index');
Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');

//categorie
Route::get("categories/{category:slug}", "CategoryController@show")->name("categories.show");

Auth::routes();

//Route::get('/home', 'Admin\HomeController@index')->name('home');
//Route::resource("articles", Admin\ArticleController::class);


Route::prefix("admin")->middleware("auth")->namespace("Admin")->name("admin.")->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard'); //->admin dash
    Route::resource("articles", ArticleController::class);
});

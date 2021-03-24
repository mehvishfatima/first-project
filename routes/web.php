<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;
//use App\Http\Controllers\ProductAjaxController;

  
//Route::resource('products', ProductController::class);

//Route::resource('ajaxproducts', ProductAjaxController::class);



use App\Http\Controllers\ArticleController;
//Route::get('/users/{name?}' , [ArticleController::class,'index']);

//Route::get('get-articles', 'App\Http\Controllers\ArticleController@index');
//Route::get('/users', 'App\Http\Controllers\ArticleController@index');
//Route::get('/get-articles',[App\Http\Controllers\ArticleController::class, 'index']);

Route::get('/get-articles',[App\Http\Controllers\ArticleController::class, 'index'])->name('get-articles');
Route::get('ajaxproducts',[App\Http\Controllers\ProductAjaxController::class,'index'])->name('ajaxproducts.index');
Route::post('ajaxproducts-store',[App\Http\Controllers\ProductAjaxController::class,'store'])->name('ajaxproducts.store');
Route::get('ajaxproducts-edit/{id}',[App\Http\Controllers\ProductAjaxController::class,'edit'])->name('ajaxproducts.edit/id');
Route::get('ajaxproducts-delete',[App\Http\Controllers\ProductAjaxController::class,'delete'])->name('ajaxproducts.delete');



//use App\Http\Controllers\ArticleController;

// Resource Route for article.
//Route::resource('articles', ArticleController::class);
// Route for get articles for yajra post request.
///Route::get('get-articles', [ArticleController::class, 'getArticles'])->name('get-articles');

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



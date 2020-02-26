<?php

use App\Article;
use App\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

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

Route::get('/about', function () {
    return 'sambo';
});

Route::get('/select', function () {
    $articles = Article::all();
    foreach ($articles as $articles) {
        echo $articles->title . "|" .
            $articles->description . "<hr/>";
    }
});


Route::get('/update', function () {
    $article =  Article::find(6);
    $article->title = 'updated title 2';
    $article->description = 'updated description 2';
    $article->save();
});

Route::get('/insert', function () {
    $article = new Article();
    $article->title = 'insert title 2020';
    $article->description = 'insert description 2020';
    $article->save();
});

Route::get('/update', function () {
    $article =  Article::find(9);
    $article->title = 'updated title 2';
    $article->description = 'updated description 2';
    $article->save();
});

Route::get('/delete', function () {
    $article = Article::find(2);
    $article->delete();
});

/**
 * --------------------------------------
 * SoftDeletes
 *
 */

Route::get('/read-trash', function () {
    $articles = Article::onlyTrashed()->get();
    foreach ($articles as $article) {
        echo $article->id . ' | ' . $article->title . ' | ' . $article->description . '<hr />';
    }
});

Route::get('/select-all', function () {
    $articles = Article::withTrashed()->get();
    foreach ($articles as $article) {
        echo $article->id . ' | ' . $article->title . ' | ' . $article->description . '<hr />';
    }
});

Route::get('/restore', function () {
    Article::onlyTrashed()->where('id', 3)->restore();
});



Route::get('/force-delete', function () {
    Article::onlyTrashed()->where('id', 3)->forceDelete();
});



/**
 * ----------------------------------------
 * Products Table
 */

Route::get('/insert-product', function () {
    $product = new Product();
    $product->product_id = 'insert products';
    $product->product_name = 'insert  product name';
    $product->price = 123;
    $product->qty = 123;
    $product->save();
});


Route::get('system/layout', 'Admin\DashboardController@Index');
Route::get('login', 'Admin\LoginController@Index');
Route::get('system/user', 'Admin\UserController@Index');

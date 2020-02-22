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
    $product->product_id = 'insert products name 1234';
    $product->product_name = 'insert  product name 1234';
    $product->price = 1234;
    $product->qty = 1234;
    $product->save();
});


/**
 * -------------------------------------------
 * select product
 */

Route::get('/select-product', function () {
    $product = Product::all();
    foreach ($product as $products) {
        echo $products->product_id . "|" .
            $products->product_name . "|" .
            $products->price . "|" .
            $products->qty . "<hr>";
    }
});

/**
 * -----------------------------------------
 * update product
 */

Route::get('/update-product', function () {
    $products = Product::find(1);
    $products->product_id = 'update product id';
    $products->product_name = 'Update product name';
    $products->price = 0001;
    $products->qty = 0002;
    $products->save();
});

/**
 * ----------------------------------
 * delete product
 */

Route::get('/delete-product', function () {
    $product_del = Product::find(1);
    $product_del->delete();
});

/**
 * -----------------------------------------------------------
 * softDelete product
 */

Route::get('/select-trash', function () {
    $product = Product::widthTrash()->get();
    foreach ($product as $products) {
        echo  $products->product_id . "|" .
            $products->product_name . "|" .
            $products->price . "|" .
            $products->qty .  "|" . "<hr>";
    }
});


Route::get('/select-all-trash', function () {
    $product  = Product::withTrashed()->get();
    foreach ($product as $products) {
        echo  $products->product_id . "|" .
            $products->product_name . "|" .
            $products->price . "|" .
            $products->qty .  "|" . "<hr>";
    }
});


Route::get('/restore-product', function () {
    Product::onlyTrashed()->WHERE('id', 2)->restore();
});



Route::get('/force-delete-product', function () {
    Product::onlyTrashed()->where('id', 3)->forceDelete();
});

Route::get('/force-delete-product', function () {
    Product::onlyTrashed()->where('id', 3)->forceDelete();
});

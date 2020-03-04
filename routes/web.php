<?php

use App\Article;
use App\Product;
use App\Auth;
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

Route::prefix('system')->group(function () {
    Route::get('/login', 'Admin\LoginController@Index')->name('login');
    Route::post('/login', 'Admin\LoginController@auth');
});

Route::group(['prefix' => 'system', 'middleware' => 'auth'], function () {
    Route::get('dashboard', 'Admin\DashboardController@Index');
    Route::get('user', 'Admin\UserController@Index');
    Route::get('user/create', 'Admin\UserController@Create');
    Route::post('user', 'Admin\UserController@Store');
    Route::get('/logout', 'Admin\LoginController@logout');
    Route::get('/category', 'Admin\CategoryController@Index');
    Route::get('/category/create', 'Admin\CategoryController@Create');
});

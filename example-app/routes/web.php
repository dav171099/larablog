<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['namespace'=>'Main'], function(){
    Route::get('/', 'IndexController');
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::group(['namespace'=>'Main'], function(){
        Route::get('/', 'IndexController');
    });
    Route::group(['namespace'=>'Category', 'prefix' => 'categories'], function(){
        Route::get('/', 'IndexController')->name('category.index');
        Route::get('/create', 'CreateController')->name('category.create');
        Route::post('/', 'StoreController')->name('category.store');
        Route::get('/{category}', 'ShowController')->name('category.show');
        Route::get('/{category}/edit', 'EditController')->name('category.edit');
        Route::patch('/{category}', 'UpdateController')->name('category.update');
        Route::delete('/{category}', 'DeleteController')->name('category.delete');
    });
});

Auth::routes();


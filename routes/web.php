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
    return view('auth.login');
});

Auth::routes();

// dashboard route
Route::get('/home', 'HomeController@index')->name('home');

// gallery routes
Route::match(['get','post'],'view-gallery', 'GalleryController@galleryCatogery')->name('view-gallery');
Route::get('delete-catogery/{cid}', 'GalleryController@deleteCatogery')->name('delete-catogery');

// subcatogery routes
Route::get('sub-catogery/{cat}', 'SubCatogeryController@gallerySubCatogery')->name('sub-catogery');


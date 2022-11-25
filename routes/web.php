<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    BannerController,
    BrandController,
    CategoryController
};
use App\Http\Controllers\Frontend\IndexController;
/**
 * Frontend Project
 */
Route::get("/",[IndexController::class,'home'])->name('home');

/**
 * End Frontend Project
 */


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin  Dashboard
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/dashboard',[AdminController::class,'admin']);

    /**
     * Banner
     */
    Route::resource('banner', BannerController::class);
    Route::post('banner_status',[BannerController::class,'banner_status'])->name('banner.status');

    /**
     * Brand
     */

     Route::resource('brand', BrandController::class);
     Route::post('brand_status',[BrandController::class,'brand_status'])->name('brand.status');

    /**
     * Category
     */

     Route::resource('category', CategoryController::class);
     Route::post('category_status',[CategoryController::class,'category_status'])->name('category.status');

});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PlantController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CareTipsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\OfferController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Backend

//login
Route::get('admin/login',[UserController::class,'loginform'])->name('admin_login');
Route::post('admin/login/post',[UserController::class,'loginpost'])->name('admin_login_post');

//Middleware


Route::group(['middleware'=>'auth'],function(){

    //Logout
Route::get('admin/logout',[UserController::class,'logout'])->name('admin_logout');


//Home
Route::get('/',[HomeController::class,'home'])->name('home');


//Plants

Route::get('admin/plants',[PlantController::class,'list'])->name('admin_plants');
Route::get('admin/plants-create',[PlantController::class,'create'])->name('admin_plants_create');
Route::post('admin/plants-store',[PlantController::class,'store'])->name('admin_plants_store');

//Category

Route::get('admin/categories',[CategoryController::class,'list'])->name('admin_categories');
Route::get('admin/categories-create',[CategoryController::class,'create'])->name('admin_categories_create');
Route::post('admin/categories-store',[CategoryController::class,'store'])->name('admin_categories_store');

//Care & Tips

Route::get('admin/care-tips',[CareTipsController::class,'list'])->name('admin_care_tips');
Route::get('admin/care-tips-create',[CareTipsController::class,'create'])->name('admin_care_tips_create');
Route::post('admin/care-tips-store',[CareTipsController::class,'store'])->name('admin_care_tips_store');


//Offers
Route::get('admin/offers',[OfferController::class,'list'])->name('admin_offers');
Route::get('admin/offers-create',[OfferController::class,'create'])->name('admin_offers_create');
Route::post('admin/offers-store',[OfferController::class,'store'])->name('admin_offers_store');

});






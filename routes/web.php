<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PlantController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CareTipsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\PlantController as FrontendPlantController;


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


// All Admin Panel Routes

Route::group(['prefix'=>'admin'],function(){ 


//login
Route::get('/login',[UserController::class,'loginform'])->name('admin_login');
Route::post('/login/post',[UserController::class,'loginpost'])->name('admin_login_post');

//Middleware


Route::group(['middleware'=>'auth'],function(){

    //Logout
Route::get('/logout',[UserController::class,'logout'])->name('admin_logout');


//Home
Route::get('/',[HomeController::class,'home'])->name('home');


//Plants

Route::get('/plants',[PlantController::class,'list'])->name('admin_plants');
Route::get('/plants-create',[PlantController::class,'create'])->name('admin_plants_create');
Route::post('/plants-store',[PlantController::class,'store'])->name('admin_plants_store');

//Category

Route::get('/categories',[CategoryController::class,'list'])->name('admin_categories');
Route::get('/categories-create',[CategoryController::class,'create'])->name('admin_categories_create');
Route::post('/categories-store',[CategoryController::class,'store'])->name('admin_categories_store');

//Care & Tips

Route::get('/care-tips',[CareTipsController::class,'list'])->name('admin_care_tips');
Route::get('/care-tips-create',[CareTipsController::class,'create'])->name('admin_care_tips_create');
Route::post('/care-tips-store',[CareTipsController::class,'store'])->name('admin_care_tips_store');


//Offers
Route::get('/offers',[OfferController::class,'list'])->name('admin_offers');
Route::get('/offers-create',[OfferController::class,'create'])->name('admin_offers_create');
Route::post('/offers-store',[OfferController::class,'store'])->name('admin_offers_store');


//Users

Route::get('/users',[UserController::class,'list'])->name('admin_users');
Route::get('/users-create',[UserController::class,'create'])->name('admin_user_create');
Route::post('/users-store',[UserController::class,'store'])->name('admin_user_store');


});

});





//All Website Routes

//home

Route::get('/',[FrontendHomeController::class,'home'])->name('Home');

//Registration

Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration',[CustomerController::class,'store'])->name('customer.store');

//Login

Route::get('/login',[CustomerController::class,'login'])->name('customer.login');
Route::post('/login',[CustomerController::class,'doLogin'])->name('customer.do.login');


//Logout

Route::get('/logout',[CustomerController::class,'logout'])->name('customer.logout');

//Plants

Route::get('/website_plants',[FrontendPlantController::class,'showlist'])->name('website_plants');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PlantController;

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

//Home
Route::get('/',[HomeController::class,'home'])->name('home');


//Plants

Route::get('admin/plants',[PlantController::class,'list'])->name('admin_plants');
Route::get('admin/plants-create',[PlantController::class,'create'])->name('admin_plants_create');
Route::post('admin/plants-store',[PlantController::class,'store'])->name('admin_plants_store');


//Category

Route::get('admin/categories',[CategoryController::class,'list'])->name('admin_categories');






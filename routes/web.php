<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PlantController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CareTipsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Backend\OrderController;

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\PlantController as FrontendPlantController;
use App\Http\Controllers\Frontend\CareTipsController as FrontendCareTipsController;
use App\Http\Controllers\Frontend\OfferController as FrontendOfferController;
use App\Http\Controllers\Frontend\OrderController as FrontendOrderController;

use App\Http\Controllers\SslCommerzPaymentController;

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

Route::group(['prefix' => 'admin'], function () {


    //login
    Route::get('/login', [UserController::class, 'loginform'])->name('admin_login');
    Route::post('/login/post', [UserController::class, 'loginpost'])->name('admin_login_post');


    //Middleware


    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => 'checkadmin'], function () {

            //Logout
            Route::get('/logout', [UserController::class, 'logout'])->name('admin_logout');


            //Profile

            Route::get('/profile', [UserController::class, 'profile'])->name('profile_view');


            //Home
            Route::get('/', [HomeController::class, 'home'])->name('home');


            Route::get('/dashboard', [HomeController::class, 'dashboardhome'])->name('dashboard.home');



            //Plants

            Route::get('/plants/print', [PlantController::class, 'print'])->name('admin_plants_print');

            Route::get('/plants', [PlantController::class, 'list'])->name('admin_plants');

            Route::get('/plant/edit/{id}', [PlantController::class, 'edit'])->name('plant_edit');

            Route::get('/plant/delete/{id}', [PlantController::class, 'delete'])->name('plant_delete');

            Route::put('/plant/update/{id}', [PlantController::class, 'update'])->name('plant_update');

            Route::get('/plants-create', [PlantController::class, 'create'])->name('admin_plants_create');

            Route::post('/plants-store', [PlantController::class, 'store'])->name('admin_plants_store');



            //Category

            Route::get('/categories/print', [CategoryController::class, 'print'])->name('admin_categories_print');


            Route::get('/categories', [CategoryController::class, 'list'])->name('admin_categories');

            Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories_edit');

            Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories_delete');

            Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories_update');

            Route::get('/categories-create', [CategoryController::class, 'create'])->name('admin_categories_create');

            Route::post('/categories-store', [CategoryController::class, 'store'])->name('admin_categories_store');



            //Care & Tips

            Route::get('/care-tips', [CareTipsController::class, 'list'])->name('admin_care_tips');

            Route::get('/care-tips/edit/{id}', [CareTipsController::class, 'edit'])->name('care-tips_edit');

            Route::get('/care-tips/delete/{id}', [CareTipsController::class, 'delete'])->name('care-tips_delete');

            Route::put('/care-tips/update/{id}', [CareTipsController::class, 'update'])->name('care-tips_update');

            Route::get('/care-tips-create', [CareTipsController::class, 'create'])->name('admin_care_tips_create');

            Route::post('/care-tips-store', [CareTipsController::class, 'store'])->name('admin_care_tips_store');



            //Offers

            Route::get('/offers', [OfferController::class, 'list'])->name('admin_offers');

            Route::get('/offers/edit/{id}', [OfferController::class, 'edit'])->name('offers_edit');

            Route::get('/offers/delete/{id}', [OfferController::class, 'delete'])->name('offers_delete');

            Route::put('/offers/update/{id}', [OfferController::class, 'update'])->name('offers_update');

            Route::get('/offers-create', [OfferController::class, 'create'])->name('admin_offers_create');

            Route::post('/offers-store', [OfferController::class, 'store'])->name('admin_offers_store');




            //Orders

            Route::get('/orders', [OrderController::class, 'list'])->name('admin_orders');

            Route::get('/orders/view/{id}', [OrderController::class, 'view'])->name('orders_view');

            Route::get('/orders/edit/{id}', [OrderController::class, 'edit'])->name('order_edit');

            Route::post('/orders/update/{id}', [OrderController::class, 'update'])->name('order_update');

            Route::post('/orders/view/status/{id}', [OrderController::class, 'status'])->name('order_view_status');

            Route::get('/orders_search', [OrderController::class, 'search'])->name('admin_orders_search');


            //Users

            Route::get('/users', [UserController::class, 'list'])->name('admin_users');

            Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users_edit');

            Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('users_delete');

            Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users_update');

            Route::get('/users-create', [UserController::class, 'create'])->name('admin_user_create');

            Route::post('/users-store', [UserController::class, 'store'])->name('admin_user_store');
        });
    });
});





//All Website Routes

//home

Route::get('/', [FrontendHomeController::class, 'home'])->name('Home');

Route::get('/search-product', [FrontendHomeController::class, 'search'])->name('Plant_search');

//Category

Route::get('/plants-under-cagtegory/{cat_id}', [FrontendHomeController::class, 'plantsUnderCategory'])->name('plants.under.category');



//Registration

Route::get('/registration', [CustomerController::class, 'registration'])->name('customer.registration');
Route::post('/registration', [CustomerController::class, 'store'])->name('customer.store');

//Login

Route::get('/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('/login', [CustomerController::class, 'doLogin'])->name('customer.do.login');


//Logout

Route::get('/logout', [CustomerController::class, 'logout'])->name('customer.logout');

//Profile

Route::get('/Customer_profile', [CustomerController::class, 'profile'])->name('Customer_profile');


//Plants

Route::get('/website_single_plants/{plant_id}', [FrontendPlantController::class, 'singlePlantView'])->name('website_single_plants');

Route::get('/website_plants', [FrontendPlantController::class, 'showlist'])->name('website_plants');


//Contact

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');


//Cart

Route::get('/cart-view', [CartController::class, 'viewCart'])->name('cart_view');
Route::get('/cart-fresh', [CartController::class, 'fresh_cart'])->name('Fresh_Cart');
Route::get('/add-to-cart/{Plant_item_id}', [CartController::class, 'addToCart'])->name('add_toCart');


Route::group(['middleware' => 'auth'], function () {

    //Checkout
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/order_details/{id}', [FrontendOrderController::class, 'orderdetails'])->name('order_details');
});


//Order

Route::post('/order-place', [FrontendOrderController::class, 'orderPlace'])->name('order_place');

//offer

Route::get('/offer', [FrontendOfferController::class, 'offerlist'])->name('offer');


//Care & Tips

Route::get('/care&tips', [FrontendCareTipsController::class, 'caretipslist'])->name('care_tips');



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

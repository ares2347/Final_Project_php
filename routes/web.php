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

Route::prefix('admin')->group(function () {
    Route::get('/login',[App\Http\Controllers\Admin\LoginController::class, "index"])->name("admin_login");
    Route::post('/login',[App\Http\Controllers\Admin\LoginController::class, "login"])->name("admin_login.perform");
    Route::post('/logout',[App\Http\Controllers\Admin\LoginController::class, "logout"])->name("admin_logout");
    Route::get('/register',[App\Http\Controllers\Admin\RegisterController::class, "index"])->name("admin_register");
    Route::post('/register',[App\Http\Controllers\Admin\RegisterController::class, "register"])->name("admin_register.perform");
    Route::get('/reset-password',[App\Http\Controllers\Admin\ResetPassword::class, "index"])->name("admin_reset-password");
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, "index"])->name("admin_home");
    Route::get('/profile',[App\Http\Controllers\Admin\UserProfileController::class, "index"])->name("admin_profile");
    Route::post('/profile',[App\Http\Controllers\Admin\UserProfileController::class, "update"])->name("admin_profile.update");
    Route::get('/{page}',[App\Http\Controllers\Admin\PageController::class, "index"])->name("admin_page");
    Route::prefix('product')->group(function (){
        Route::get('/list',[App\Http\Controllers\Admin\ProductController::class, "listAll"])->name("admin_product.list");
        Route::get('/create',[App\Http\Controllers\Admin\ProductController::class,"create"])->name("admin_product.create");
        Route::post('/create',[App\Http\Controllers\Admin\ProductController::class,"store"])->name("create_product");
        Route::get("/edit/{product}",[App\Http\Controllers\Admin\ProductController::class,"edit"]);
        Route::post("/edit/{product}",[App\Http\Controllers\Admin\ProductController::class,"update"]);
        Route::post("/delete/{product}",[App\Http\Controllers\Admin\ProductController::class,"delete"]);
    });
});

Route::prefix('/')->group(function () {
    Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name("user_home");
    Route::get('/about', [App\Http\Controllers\User\AboutController::class, 'index'])->name("user_about");
    Route::get('/contact', [App\Http\Controllers\User\ContactController::class, 'index'])->name("user_contact");
    Route::get('/products', [App\Http\Controllers\User\ProductController::class, 'indexListing'])->name("user_product-listing");
    Route::get('/product', [App\Http\Controllers\User\ProductController::class, 'indexSingle'])->name("user_product-single");
});

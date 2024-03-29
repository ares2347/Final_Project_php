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

Route::group([], function () {
    include_once("public.php");
});
Route::group(["middleware"=>["auth"]], function () {
    include_once("user.php");
});

Route::group(["middleware"=>["auth"], "prefix" => "admin", "as" => "admin."], function () {
    include_once("admin.php");
});
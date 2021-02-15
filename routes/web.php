<?php

use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, "index"])->name("home");

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "login_proses"])->name("login_proses");
Route::get("/register", [AuthController::class, "register"])->name("register");
Route::post("/register", [AuthController::class, "regist_proses"])->name("regist_proses");

Route::group(["middleware" => ["auth.q"]], function () {
    Route::get("/seller", [AuthController::class, "seller"])->name("seller");
    Route::post("/seller", [AuthController::class, "seller_proses"])->name("seller_proses");
    Route::post("/logout", [AuthController::class, "logout"])->name("logout");
});

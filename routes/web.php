<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('book-now', [App\Http\Controllers\HomeController::class, 'bookNow']);
// Admin Portal
Route::get('admin/login',[App\Http\Controllers\Admin\LoginController::class, 'login']);
Route::post('admin/login',[App\Http\Controllers\Admin\LoginController::class, 'loginPost']);
Route::post('forget-password',[App\Http\Controllers\Admin\LoginController::class, 'forgetPassword']);
Route::get('reset-password/{token}',[App\Http\Controllers\Admin\LoginController::class, 'resetPassword']);
Route::post('change-password',[App\Http\Controllers\Admin\LoginController::class, 'changePassword']);
Route::prefix('admin')->middleware('auth')->group(function () {
});

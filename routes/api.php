<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

#Form Datas=[name,email,password]
Route::post('sign-up',[LoginController::class,'signUp']);
#Form Datas=[name,email]
Route::post('sign-in',[LoginController::class,'signIn']);
Route::middleware('auth:api')->group(function () { #Headers=[Authorization=>Bearer {token},Accept=>application/json]
    Route::get('home', [LoginController::class,'home']);
    Route::get('sign-out',[LoginController::class,'signOut']);
});

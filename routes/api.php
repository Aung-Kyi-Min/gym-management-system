<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/auth/login', [AuthController::class, 'index'])->name('auth.login');
Route::get('/auth/signup', [AuthController::class, 'index'])->name('auth.signup');
Route::get('/auth/forgetpassword', [AuthController::class, 'index'])->name('auth.forgetpassword');
Route::get('/auth/resetpassword', [AuthController::class, 'index'])->name('auth.resetpassword');


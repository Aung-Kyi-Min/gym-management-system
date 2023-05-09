<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/workout', [UserController::class, 'workout'])->name('user.workout');
Route::get('/feedback', [UserController::class, 'feedback'])->name('user.feedback');
Route::get('/user/edit/{id}', [UserController::class, 'index'])->name('user.edit');
Route::get('/purchased', [UserController::class, 'index'])->name('user.purchased');
Route::get('/user/profile', [UserController::class, 'Userprofile'])->name('user.profile');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/workout', [AdminController::class, 'workout'])->name('admin.workout');
Route::get('/admin/instructor', [AdminController::class, 'instructor'])->name('admin.instructor');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/member', [AdminController::class, 'member'])->name('admin.member');
Route::get('/admin/create/workout', [AdminController::class, 'createWorkout'])->name('admin.create_workout');
Route::get('/admin/create/instructor', [AdminController::class, 'createInstructor'])->name('admin.create_instructor');
Route::get('/admin/edit/workout/{id}', [AdminController::class, 'editWorkout'])->name('admin.edit_workout');
Route::get('/admin/edit/instructor/{id}', [AdminController::class, 'editInstuctor'])->name('admin.edit_insturctor');
Route::get('/admin/edit/{id}', [AdminController::class, 'index'])->name('admin.edit');

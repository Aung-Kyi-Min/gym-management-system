<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\InstructorController;

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
Route::get('/purchased', [UserController::class, 'purchase'])->name('user.purchased');
Route::get('/profile', [UserController::class, 'userprofile'])->name('user.profile');


Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/forgetpassword', [AuthController::class, 'forgetpassword'])->name('auth.forgetpassword');
Route::get('/reset', [AuthController::class, 'reset'])->name('auth.reset');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/instructor/create', [AdminController::class, 'instructorCreate'])->name('admin.instructor.create');
Route::get('/admin/workout/create', [AdminController::class, 'workoutCreate'])->name('admin.workout.create');
Route::get('/admin/workout', [AdminController::class, 'workout'])->name('admin.workout');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/member', [AdminController::class, 'member'])->name('admin.member');
Route::get('/admin/workout/create', [AdminController::class, 'workoutCreate'])->name('admin.create_workout');

//instructor
Route::get('/admin/instructor', [InstructorController::class, 'index'])->name('admin.instructor');
Route::get('/admin/instructor/create',[InstructorController::class, 'create'])->name('admin.create_instructor');
Route::post('/admin/instructor/store', [InstructorController::class, 'store'])->name('admin.store_instructor');
Route::get('/admin/instructor/search', [InstructorController::class, 'search'])->name('admin.search_instructor');
Route::get('/admin/instructor/{id}/edit', [InstructorController::class, 'edit'])->name('admin.edit_instructor');
Route::put('/admin/instructor/{id}', [InstructorController::class, 'update'])->name('admin.update_instructor');
Route::delete('/admin/instructorlist/{id}', [InstructorController::class, 'destory'])->name('admin.destroy_instructor');
Route::get('/admin/workout/edit', [AdminController::class, 'workoutEdit'])->name('admin.edit_workout');
Route::get('/admin/instructor/edit', [AdminController::class, 'instructorEdit'])->name('admin.edit_insturctor');
Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
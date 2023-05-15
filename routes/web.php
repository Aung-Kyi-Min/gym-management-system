<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WorkoutController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\UsersController;

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

// admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::get('/admin/member', [AdminController::class, 'member'])->name('admin.member');

//Excel export and import
Route::get('/export-users',[UserController::class,'exportUsers'])->name('export.users');
Route::get('/export-instructors',[UserController::class,'exportInstructors'])->name('export.instructors');
Route::get('/export-members',[UserController::class,'exportMembers'])->name('export.members');
Route::get('/file-import/user',[UserController::class,'importView'])->name('importusers');
Route::post('/import/user',[UserController::class,'import'])->name('import');
Route::get('/file-imports/instructor',[UserController::class,'importViews'])->name('import-views');
Route::post('/imports/instructor',[UserController::class,'imports'])->name('imports');
Route::get('/file-import/member',[UserController::class,'importV'])->name('import-member');
Route::post('/import/member',[UserController::class,'imports_Views'])->name('import-members');

// admin user
Route::get('/admin/user', [UsersController::class, 'user'])->name('admin.user');
Route::get('/admin/user/create', [UsersController::class, 'create'])->name('admin.create_user');
Route::post('/admin/user/store' , [UsersController::class, 'store'])->name('admin.store_user');
Route::get('/admin/user/edit/{id}' , [UsersController::class, 'edit'])->name('admin.edit_user');
Route::post('/admin/user/update/{id}' , [UsersController::class, 'update'])->name('admin.update_user');
Route::post('/admin/user/destroy/{id}', [UsersController::class, 'destroy'])->name('admin.destroy_user');

// admin workout
Route::get('/admin/workout', [WorkoutController::class, 'workout'])->name('admin.workout');
Route::get('/admin/workout/create', [WorkoutController::class, 'create'])->name('admin.create_workout');
Route::post('/admin/workout/store' ,  [WorkoutController::class, 'store'])->name('admin.store_workout');
Route::get('/admin/workout/edit/{id}', [WorkoutController::class, 'edit'])->name('admin.edit_workout');
Route::post('/admin/workout/update/{id}' , [WorkoutController::class, 'update'])->name('admin.update_workout');
Route::post('/admin/workout/destroy/{id}', [WorkoutController::class, 'destroy'])->name('admin.destroy_workout');

//admin instructor

Route::get('/admin/instructor', [InstructorController::class, 'index'])->name('admin.instructor');
Route::get('/admin/instructor/create',[InstructorController::class, 'create'])->name('admin.create_instructor');
Route::post('/admin/instructor/store', [InstructorController::class, 'store'])->name('admin.store_instructor');
Route::get('/admin/instructor/search', [InstructorController::class, 'search'])->name('admin.search_instructor');
Route::get('/admin/instructor/{id}/edit', [InstructorController::class, 'edit'])->name('admin.edit_instructor');
Route::put('/admin/instructor/{id}', [InstructorController::class, 'update'])->name('admin.update_instructor');
Route::delete('/admin/instructorlist/{id}', [InstructorController::class, 'destory'])->name('admin.destroy_instructor');

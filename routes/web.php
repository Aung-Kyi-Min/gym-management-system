<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
Route::get('/profile', [UserController::class, 'Userprofile'])->name('user.profile');
Route::get('/successPurchase', [UserController::class, 'successPurchase'])->name('user.successPurchase');




Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/forgetpassword', [AuthController::class, 'forgetpassword'])->name('auth.forgetpassword');
Route::get('/reset/{token}', [AuthController::class, 'reset'])->name('auth.reset');
Route::post('/registerUser', [AuthController::class, 'registerUser'])->name('auth.registerUser');
Route::post('/LoginUser', [AuthController::class, 'LoginUser'])->name('auth.loginUser');
Route::post('forget-password', [AuthController::class, 'submitForgetPasswordForm'])->name('auth.forget');
Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('auth.resetpsw');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/workout', [AdminController::class, 'workout'])->name('admin.workout');
Route::get('/admin/instructor', [AdminController::class, 'instructor'])->name('admin.instructor');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/member', [AdminController::class, 'member'])->name('admin.member');
Route::get('/admin/workout/create', [AdminController::class, 'workoutCreate'])->name('admin.create_workout');
Route::get('/admin/instructor/create', [AdminController::class, 'instructorCreate'])->name('admin.create_instructor');
Route::get('/admin/workout/edit', [AdminController::class, 'workoutEdit'])->name('admin.edit_workout');
Route::get('/admin/instructor/edit', [AdminController::class, 'instructorEdit'])->name('admin.edit_insturctor');
Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');


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

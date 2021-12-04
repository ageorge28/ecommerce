<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Backend\AdminPasswordController;
use App\Http\Controllers\UserPasswordController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']] , function() {
    Route::get('/login', [AdminController::class, 'create']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

// Admin routes
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
Route::get('/admin/profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
Route::post('/admin/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');
Route::get('/admin/password', [AdminPasswordController::class, 'edit'])->name('admin.password');
Route::post('/admin/password/update', [AdminPasswordController::class, 'update'])->name('admin.password.update');


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', compact('user'));
})->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'destroy'])->name('user.logout');
Route::get('/user/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::post('/user/profile/update', [UserProfileController::class, 'update'])->name('profile.update');
Route::get('/user/password/edit', [UserPasswordController::class, 'edit'])->name('password.edit');
Route::post('/user/password/update', [UserPasswordController::class, 'update'])->name('password.update');

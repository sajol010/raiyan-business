<?php

use App\Http\Controllers\Auth\RolesController;
use App\Http\Controllers\Auth\UsersController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\TaxController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('/pay-tax', [HomeController::class, 'taxForm'])->name('taxForm');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile Routes
    Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [UsersController::class, 'updateProfile'])->name('profile.update');

    // ***Admin Routes***
    Route::prefix('admin')->middleware(['role:admin'])->group(function () {
        // Role Management Routes
        Route::resource('roles', RolesController::class, ['name' => 'roles']);
        // User Management Routes
        Route::resource('users', UsersController::class, ['name' => 'users']);
    });
});


/**
 *
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/tax', [TaxController::class, 'store'])->name('tax.add');

<?php

use App\Http\Controllers\Auth\RolesController;
use App\Http\Controllers\Auth\UsersController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\CertificateController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TaxController;
use App\Http\Controllers\SslCommerzPaymentController;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/application/pending-list', [DashboardController::class, 'pending'])->name('certificate.pending');
    Route::get('/application/approved-list', [DashboardController::class, 'approved'])->name('certificate.approved');

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
// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('index');


// Tax Start
Route::get('/pay-tax', [TaxController::class, 'create'])->name('tax.form');
Route::post('/tax', [TaxController::class, 'store'])->name('tax.add');
Route::get('verify-tax', [TaxController:: class, 'taxVerify'])->name('tax.verify');
Route::get('tax-verified', [TaxController:: class, 'taxVerifiedPage'])->name('tax.verifiedPage');
// Tax End

//Certificate Start
Route::get('registration-for-certificate', [CertificateController::class, 'create'])->name('certificate.form');
Route::post('registration-store', [CertificateController::class, 'store'])->name('certificate.store');
Route::get('search-certificate' , [CertificateController::class, 'searchCertificate'])->name('certificate.search');
Route::get('otp-for-certificate-download' , [CertificateController::class, 'getOTP'])->name('certificate.otp');
//Certificate End


// SSLCOMMERZ Start
Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('payment/success', [SslCommerzPaymentController::class, 'success']);
Route::post('payment/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('payment/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

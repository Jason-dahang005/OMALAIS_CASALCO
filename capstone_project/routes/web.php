<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MembershipApplicationController;
use App\Http\Controllers\officer\PreMembershipApplicationController;


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


// Route::resource('/officer-dashboard', OfficerDashboardController::class);
// Route::resource('/membership', MembershipAppController::class);
// Route::resource('/loan', LoanAppController::class);

// Route::get('/approved-loans', function () {
//     return view('admin.approved-loans');
// });

Route::view('/', 'client.home');
Route::resource('/membership-application', MembershipApplicationController::class);

Route::view('/officer/dashboard', 'officer.dashboard');
Route::resource('/officer/membership-application', PreMembershipApplicationController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

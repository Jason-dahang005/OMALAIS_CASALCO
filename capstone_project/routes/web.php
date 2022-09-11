<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\admin\DashboardController;
// use App\Http\Controllers\admin\MembershipController;
// use App\Http\Controllers\admin\LoanController;
// use App\Http\Controllers\admin\MemberController;
// use App\Http\Controllers\officer\OfficerDashboardController;
// use App\Http\Controllers\officer\MembershipAppController;
// use App\Http\Controllers\officer\LoanAppController;


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



// CLIENT SIDE START ---------------------------------------------------------

Route::view('/', 'client.home');

// CLIENT SIDE END   ---------------------------------------------------------

// ===================================================================================================================

// OFFICER SIDE START --------------------------------------------------------

Route::view('/officer/dashboard', 'officer.dashboard');
Route::view('/officer/loan', 'officer.loan');
Route::view('/officer/membership', 'officer.membership');
Route::view('/officer/pre-approve-loans', 'officer.pre-approve-loans');
Route::view('/officer/pre-approved-membership', 'officer.pre-approved-membership');

// OFFICER SIDE END   --------------------------------------------------------

// ===================================================================================================================

// ADMIN SIDE START ----------------------------------------------------------

Route::view('/admin/dashboard', 'admin.dashboard');
Route::view('/admin/membership', 'admin.membership');
Route::view('/admin/loan', 'admin.loan');
Route::view('/admin/approved-loans', 'admin.approved-loans');
Route::view('/admin/member', 'admin.member');

// ADMIN SIDE END  -----------------------------------------------------------




















// Route::resource('/officer-dashboard', OfficerDashboardController::class);
// Route::resource('/membership', MembershipAppController::class);
// Route::resource('/loan', LoanAppController::class);

// Route::get('/approved-loans', function () {
//     return view('admin.approved-loans');
// });

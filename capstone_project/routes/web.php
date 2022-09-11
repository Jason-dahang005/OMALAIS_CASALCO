<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\admin\DashboardController;
// use App\Http\Controllers\admin\MembershipController;
// use App\Http\Controllers\admin\LoanController;
// use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\officer\OfficerDashboardController;
use App\Http\Controllers\officer\MembershipAppController;
use App\Http\Controllers\officer\LoanAppController;


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

Route::resource('/', OfficerDashboardController::class);
Route::resource('/membership', MembershipAppController::class);
Route::resource('/loan', LoanAppController::class);



Route::get('/approved-loans', function () {
    return view('admin.approved-loans');
});

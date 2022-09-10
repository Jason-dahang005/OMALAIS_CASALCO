<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MembershipController;
use App\Http\Controllers\admin\LoanController;
use App\Http\Controllers\admin\MemberController;

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

Route::resource('/', DashboardController::class);
Route::resource('/membership', MembershipController::class);
Route::resource('/loan', LoanController::class);
Route::resource('/member', MemberController::class);


Route::get('/approved-loans', function () {
    return view('admin.approved-loans');
});

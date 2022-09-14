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

Auth::routes();

// CLIENT SIDE ROUTES START ------------------------------------------------------------------------------------
Route::view('/', 'client.home');
Route::resource('/membership-application', MembershipApplicationController::class);
// CLIENT SIDE ROUTES END   ------------------------------------------------------------------------------------

// OFFICER SIDE ROUTES START ------------------------------------------------------------------------------------
Route::view('/officer/dashboard', 'officer.dashboard');
Route::resource('/officer/membership-application', PreMembershipApplicationController::class);
// OFFICER SIDE ROUTES END   ------------------------------------------------------------------------------------

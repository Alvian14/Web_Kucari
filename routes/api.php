<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\Mobile\OtpController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('post')->group (function(){
    Route::get('/get', [SidebarController::class, 'proses_upload']);
});

Route::post('/otp', [OtpController::class, 'sendOtp']);
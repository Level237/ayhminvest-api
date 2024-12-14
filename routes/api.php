<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Payment\StripeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("login",[LoginController::class,"login"]);

Route::post("level",function(){
return "dk";
});
Route::post('charge',[StripeController::class,'charge']);
Route::middleware(['auth:api'])->prefix('v1')->group(function(){
    Route::post('/logout',[LogoutController::class,'logout']);
});

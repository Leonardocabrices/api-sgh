<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Analyst\EmployeeController;

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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::prefix('analyst')->group(function () {
        Route::get('/employees',[EmployeeController::class, 'index']);
        Route::get('/employees/{employee}', [EmployeeController::class, 'show']);
        Route::post('/employees',[EmployeeController::class,'store']);
        Route::put('/employees/{employee}',[EmployeeController::class,'update']);
        Route::delete('/employees/{employee}',[EmployeeController::class,'destroy']);
    });
});

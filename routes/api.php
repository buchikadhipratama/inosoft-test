<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/report', [VehicleController::class, 'index']);
Route::get('/sales', [VehicleController::class, 'sales']);
Route::get('/stock', [VehicleController::class, 'stock']);
Route::get('/sales/edit/{id}', [VehicleController::class, 'edit'])->name("sales.edit");
Route::POST('/sales/update', [VehicleController::class, 'update'])->name("sales.update");



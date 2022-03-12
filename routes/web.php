<?php

use App\Http\Controllers\VehicleController;
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

Route::get('/', function () {
    return view('layouts.report');
});
// Route::get('/sales', function () {
//     return view('sales');
// });

Route::get('/sales/edit/{id}', [VehicleController::class, 'edit'])->name("sales.edit");
Route::get('/report', [VehicleController::class, 'index']);
Route::get('/sales', [VehicleController::class, 'sales']);
Route::POST('/sales/update', [VehicleController::class, 'update'])->name("sales.update");
Route::get('/stock', [VehicleController::class, 'stock']);

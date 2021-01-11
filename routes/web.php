<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});
Route::post('/upload/employees/', [EmployeeController::class, 'store']);
Route::get('/upload/employees', [EmployeeController::class, 'index']);
Route::post('/upload/customers/', [CustomerController::class, 'store']);
Route::get('/upload/customers/', [CustomerController::class, 'index']);
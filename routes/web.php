<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EmployeeController::class, 'web_employee_index'])->name('dashboard');
Route::get('/add-data', [EmployeeController::class, 'web_employee_add'])->name('employee.add');
Route::post('/store-data', [EmployeeController::class, 'web_employee_store'])->name('employee.store');


<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index'])->name('company');
Route::get('/company/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('create-company');
Route::post('/company/store', [App\Http\Controllers\CompanyController::class, 'store'])->name('store-company');
Route::get('/company/show/{id}', [App\Http\Controllers\CompanyController::class, 'show'])->name('show-company')->where('id', '[0-9]+');
Route::get('/company/edit/{id}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('edit-company')->where('id', '[0-9]+');
Route::get('/company/delete/{id}', [App\Http\Controllers\CompanyController::class, 'destroy'])->name('destroy-company')->where('id', '[0-9]+');
Route::post('/company/update', [App\Http\Controllers\CompanyController::class, 'update'])->name('update-company');

Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee');
Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('create-employee');
Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('store-employee');
Route::get('/employee/show/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('show-employee')->where('id', '[0-9]+');
Route::get('/employee/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('edit-employee')->where('id', '[0-9]+');
Route::post('/employee/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('update-employee');
Route::get('/employee/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('destroy-employee')->where('id', '[0-9]+');

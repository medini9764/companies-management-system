<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
    Route::get('/new-company', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/new-company', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/new-company/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::post('/new-company/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::get('/delete-company/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/new-employee', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/new-employee', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/new-employee/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/new-employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('/delete-employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
});

require __DIR__.'/auth.php';

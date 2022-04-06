<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BudgetFormController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('layouts.app');
});

Route::get('/home', function () {
    return view('layouts.index');
});

Route::get('/budgets', [BudgetController::class, 'index'])->name('budgets');

Route::get('/budgetForm', [BudgetFormController::class, 'index'])->name('budgetForm');
Route::post('/budgetForm', [BudgetFormController::class, 'store']);
Route::delete('/budgetForm/{entry}', [BudgetFormController::class, 'destroy'])->name('entry.destroy');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

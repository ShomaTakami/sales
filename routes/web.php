<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DailyReportController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/companies/dashboard', function () {
    })->name('companies.dashboard');
    Route::get('/leaders/dashboard', function () {
    })->name('leaders.dashboard');
    Route::get('/employees/dashboard', function () {
    })->name('employees.dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/daily-reports/create', [DailyReportController::class, 'create'])->middleware(['auth', 'verified'])->name('daily-reports.create');
Route::post('/daily-reports', [DailyReportController::class, 'store'])->middleware(['auth', 'verified'])->name('daily-reports.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

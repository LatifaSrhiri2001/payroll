<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeManagement;
use App\Http\Controllers\PrimeController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\fichepaieController;
use App\Http\Controllers\telechargerPaieController;
use App\Http\Controllers\cotisations;
   
    use App\Http\Controllers\StatisticController;

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('employes', EmployeManagement::class);
    Route::resource('primes', PrimeController::class);
    Route::resource('conges', CongeController::class);
    Route::resource('cotisations', cotisations::class);
    Route::get('paie/fiche/{employeId}', [fichepaieController::class, 'showPaie'])->name('paie.fiche');
    Route::get('/paie/download/{id}', [telechargerPaieController::class, 'downloadPaie'])->name('paie.download');
 

Route::get('admin/dashboard', [StatisticController::class, 'statistic'])->name('admin.dashboard');


});
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');





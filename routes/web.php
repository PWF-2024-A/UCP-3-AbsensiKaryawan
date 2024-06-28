<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use App\Models\Presence;
use Illuminate\Support\Facades\Auth;
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
    return view('landing.landing');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    })->name('dashboard');

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/user/reports', [UserDashboardController::class, 'reports'])->name('user.report');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/presensi/create', [PresenceController::class, 'index'])->name('presensi.index');
    Route::post('/presensi', [PresenceController::class, 'store'])->name('presensi.store');
    Route::get('/presensi/{id}', [PresenceController::class, 'show'])->name('presensi.show');
    Route::get('/presensi/{presence}/edit', [PresenceController::class, 'edit'])->name('presensi.edit');
    Route::put('/presensi/{presence}', [PresenceController::class, 'update'])->name('presensi.update');
    Route::delete('/presensi/{presence}', [PresenceController::class, 'destroy'])->name('presensi.destroy');

Route::middleware('admin')->group(function(){
        Route::get('/karyawan', [UserController::class, 'index'])->name('user.index');
        Route::delete('/karyawan/{user}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::get('/karyawan/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::patch('/karyawan/{user}', [UserController::class, 'update'])->name('user.update');

        Route::get('/divisi', [DivisionController::class, 'index'])->name('division.index');
        Route::post('/divisi', [DivisionController::class, 'store'])->name('division.store');
        Route::get('/divisi/create', [DivisionController::class, 'create'])->name('division.create');
        Route::get('/divisi/{division}/edit', [DivisionController::class, 'edit'])->name('division.edit');
        Route::patch('/divisi/{division}', [DivisionController::class, 'update'])->name('division.update');
        Route::delete('/divisi/{division}', [DivisionController::class, 'destroy'])->name('division.destroy');
});

});

require __DIR__.'/auth.php';

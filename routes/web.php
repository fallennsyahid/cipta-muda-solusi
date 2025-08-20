<?php

use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Admin\JobsController as JobsAdminController;
use App\Http\Controllers\Admin\PartnerAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::post('/', [ContactController::class, 'store'])->name('index.store');

Route::get('/jobs', [JobsController::class, 'index'])->name('user.jobs.index');

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('admin/jobs', JobsAdminController::class)->middleware(['auth', 'verified']);

Route::resource('admin/contact', ContactAdminController::class);

Route::resource('admin/partner', PartnerAdminController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

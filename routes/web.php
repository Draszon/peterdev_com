<?php

use App\Http\Controllers\Admin\AboutmeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\IntroductionController;
use App\Http\Controllers\Admin\TechStackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Introduction;
use Illuminate\Support\Facades\Route;

//public oldal route-ok
Route::get('/', [HomeController::class, 'index'])->name('home');

//admin oldal route-ok hitelesítéssel midleware groupban
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('introduction', IntroductionController::class);
    Route::resource('aboutme', AboutmeController::class);
    
    Route::delete('/techstack/multiple-delete', [TechStackController::class, 'multipleDestroy'])
        ->name('techstack.multiple-destroy');
    Route::resource('techstack', TechStackController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

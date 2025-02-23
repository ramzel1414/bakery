<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/add-bread', [AdminController::class, 'add_bread_page'])->name('add-bread');
Route::post('/create-bread', [AdminController::class, 'create_bread'])->name('create-bread');
Route::get('/show-bread', [AdminController::class, 'show_bread'])->name('show-bread');
Route::get('/delete-bread/{id}', [AdminController::class, 'delete_bread'])->name('delete-bread');
Route::get('/edit-bread/{id}', [AdminController::class, 'edit_bread'])->name('edit-bread');
Route::post('/update-bread/{id}', [AdminController::class, 'update_bread'])->name('update-bread');

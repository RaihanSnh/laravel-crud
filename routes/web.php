<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("news", [NewsController::class, "index"])->name("news.index");
// Route::get("news/create", [NewsController::class, "create"])->name("news.create");
// Route::post("news", [NewsController::class, "store"])->name("news.strore");
// Route::get("news/{news}", [NewsController::class, "show"])->name("news.show");
// Route::get("news/{news}/edit", [NewsController::class, "edit"])->name("news.edit");
// Route::put("news/{news}", [NewsController::class, "update"])->name("news.update");
// Route::delete("news/{news}", [NewsController::class, "destroy"])->name("news.destroy");

Route::resource("news", NewsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

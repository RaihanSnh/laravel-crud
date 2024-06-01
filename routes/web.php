<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\videoController;
use App\Http\Middleware\DemoMiddleware;

// Route::get("/",[UserController::class,"index"])->name("home");
// Route::get("/{id}",[UserController::class,"showdata"])->name('show.data');
Route::get("/",[UserController::class,"index"])->name("index");
Route::get("/create",[UserController::class,"create"])->name("create");
Route::post("/store",[UserController::class,"store"])->name("store");
Route::get("/delete/{id}",[UserController::class,"delete"])->name("delete");
Route::get("/edit/{id}",[UserController::class,"edit"])->name("edit");
Route::post("/update/{id}",[UserController::class,"update"])->name("update");

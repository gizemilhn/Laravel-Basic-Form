<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/form');
});
Route::post('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('form.submit');

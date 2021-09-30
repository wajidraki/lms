<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstituationController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/institation',[ InstituationController::class,'index']);
Route::post('/institation/store',[ InstituationController::class,'store'])->name('institation.store');

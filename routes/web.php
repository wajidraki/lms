<?php

use App\Models\Department;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstituationController;


Route::get('/', function () {
    return view('dashboard');
});

Route::group(['middleware'=>'auth'], function (){


    Route::get('/institation',[ InstituationController::class,'index']);
    Route::post('/institation/store',[ InstituationController::class,'store'])->name('institation.store');
    Route::get('/noinstview',[InstituationController::class,'indexo']);


    Route::get('/department',[ DepartmentController::class,'index']);
    Route::post('/departemnt/store',[ DepartmentController::class, 'store'])->name('department.store');

    Route::get('/student',[ StudentController::class,'index']);
    Route::post('/student/store',[ StudentController::class,'store'])->name('student.store');
    Route::get('/students/{id}',[StudentController::class,'show'])->name('student.show');



});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

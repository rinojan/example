<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class,"index"])->name('home');


Route::prefix('/student')->group(function(){

    Route::get('/',[StudentController::class,"index"])->name('student');
    Route::post('/store',[StudentController::class,"store"])->name('student.store');
    //Route::get('/create',[StudentController::class,"create"])->name('student.create');

   // Route::get('/',[StudentController::class,"index"])->name('student');




});

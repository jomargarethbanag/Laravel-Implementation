<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/resume', 'App\Http\Controllers\ResumeController@showResume');
Route::post('/resume', [ResumeController::class, 'store'])->name('resume.store');
Route::get('/resume/{resume}', [ResumeController::class, 'show'])->name('resume.show');
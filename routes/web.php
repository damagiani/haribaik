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

Route::get('/', function () {
    return view('landingpage');
});

// Route::get('/dashboard', function () {
//     return view('layouts.dashboard');
// });

// Route::get('/warigabelogform', function () {
//     return view('wariga.create');
// });

Route::get('/warigabelog', [App\Http\Controllers\WarigaController::class, 'index'])->name('warigabelog')->middleware('auth');
Route::get('/warigabelog/create', [App\Http\Controllers\WarigaController::class, 'create'])->name('warigabelog.create')->middleware('auth');
Route::post('/warigabelog/create', [App\Http\Controllers\WarigaController::class, 'store'])->name('warigabelog.store')->middleware('auth');
Route::get('/warigabelog/result/{id}', [App\Http\Controllers\WarigaController::class, 'result'])->name('warigabelog.result')->middleware('auth');
Route::post('/warigabelog/delete/{id}', [App\Http\Controllers\WarigaController::class, 'delete'])->name('warigabelog.delete')->middleware('auth');
Route::get('/warigabelog/cetak', [App\Http\Controllers\WarigaController::class, 'cetak'])->name('warigabelog.cetak')->middleware('auth');

// Route::get('/warigabelog/create/save', [App\Http\Controllers\WarigaController::class, 'create'])->name('warigabelog.create');
// Route::get('/warigabelog/result', [App\Http\Controllers\WarigaController::class, 'result'])->name('warigabelog.create');

Route::get('/fengshui', [App\Http\Controllers\FengshuiController::class, 'index'])->name('fengshui')->middleware('auth');
Route::get('/fengshui/create', [App\Http\Controllers\FengshuiController::class, 'create'])->name('fengshui.create')->middleware('auth');
Route::post('/fengshui/create', [App\Http\Controllers\FengshuiController::class, 'store'])->name('fengshui.store')->middleware('auth');
Route::get('/fengshui/result/{id}', [App\Http\Controllers\FengshuiController::class, 'result'])->name('fengshui.result')->middleware('auth');
Route::post('/fengshui/delete/{id}', [App\Http\Controllers\FengshuiController::class, 'delete'])->name('fengshui.delete')->middleware('auth');


//autentikasi
Auth::routes();
Route::middleware(['is_admin'])->group(function () {
    Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
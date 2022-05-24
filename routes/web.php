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
    return view('layouts.dashboard');
});

Route::get('/fengshui', function () {
    return view('layouts.fengshui');
});

// Route::get('/warigabelogform', function () {
//     return view('wariga.create');
// });

Route::get('/warigabelog', [App\Http\Controllers\WarigaController::class, 'index'])->name('warigabelog');
Route::get('/warigabelog/create', [App\Http\Controllers\WarigaController::class, 'create'])->name('warigabelog.create');
Route::post('/warigabelog/create', [App\Http\Controllers\WarigaController::class, 'store'])->name('warigabelog.store');
Route::get('/warigabelog/result/{id}', [App\Http\Controllers\WarigaController::class, 'result'])->name('warigabelog.result');
Route::post('/warigabelog/delete/{id}', [App\Http\Controllers\WarigaController::class, 'delete'])->name('warigabelog.delete');

// Route::get('/warigabelog/create/save', [App\Http\Controllers\WarigaController::class, 'create'])->name('warigabelog.create');
// Route::get('/warigabelog/result', [App\Http\Controllers\WarigaController::class, 'result'])->name('warigabelog.create');



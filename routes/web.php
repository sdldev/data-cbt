<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hasil', [HasilController::class, 'index'])->name('index');
Route::get('/ajax', [HasilController::class, 'ajax'])->name('ajax');

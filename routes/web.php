<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SomarController;

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
    return view('welcome');
});

Route::get('/somar', [SomarController::class, 'index'])->name('somar.index');
Route::post('/somar', [SomarController::class, 'somar'])->name('somar');

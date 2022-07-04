<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

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

Route::get('/', [SchoolController::class, 'Home']);

Route::get('/sejarah', [SchoolController::class, 'Sejarah']);

Route::get('/kompetensi', [SchoolController::class, 'Jurusan']);

Route::get('/matrikulasi', [SchoolController::class, 'Matrikul']);

Route::get('/kantin', [SchoolController::class, 'Kantin']);
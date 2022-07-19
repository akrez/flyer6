<?php

use App\Http\Controllers\ExcelController;
use App\Providers\RouteServiceProvider;
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

Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get(RouteServiceProvider::HOME, [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/excel-page', [ExcelController::class, 'index'])->name('excel-index');
Route::post('/excel-page/import', [ExcelController::class, 'import'])->name('file-import');
  
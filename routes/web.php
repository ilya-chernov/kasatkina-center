<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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
})->name('home');

Route::get('/about', [pagesController::class, 'aboutPage'])->name('about');
Route::get('/services', [pagesController::class, 'servicesPage'])->name('our-services');
Route::get('/leader', [pagesController::class, 'leaderPage'])->name('leader');

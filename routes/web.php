<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ServicesController;

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
Route::get('/services', [ServicesController::class, 'index'])->name('our-services');
Route::get('/services/{slug}', [ServicesController::class, "showService"])->name('service.show');

Route::get('/leader', [pagesController::class, 'leaderPage'])->name('leader');

Route::get('/smi-o-nas', [pagesController::class, 'smiONas'])->name('smi-o-nas');

Route::get('/articles', [ArticlesController::class, 'index'])->name('article.index');
Route::get('/articles/{code}', [ArticlesController::class, 'viewArticle'])->name('article');



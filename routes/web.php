<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('home.index');

Route::get('/all_plot', [App\Http\Controllers\Frontend\IndexController::class, 'all_plot'])->name('home.all_plot');

Route::get('/details/{id}', [App\Http\Controllers\Frontend\IndexController::class, 'details'])->name('home.details');

Route::get('/search', [App\Http\Controllers\Frontend\IndexController::class, 'search'])->name('home.search');

Route::get('/get-size-category/{id}', [App\Http\Controllers\Frontend\IndexController::class, 'getSizeCategory']);

Route::get('/search-type/{location_id}', [App\Http\Controllers\Frontend\IndexController::class, 'searchType'])->name('home.search-type');

Route::get('/search-plot', [App\Http\Controllers\Frontend\IndexController::class, 'searchPlot'])->name('home.searchPlot');

Route::post('/query-submit', [App\Http\Controllers\Frontend\IndexController::class, 'storeQuery'])->name('customer.query.store');

Route::post('/ads-query-submit', [App\Http\Controllers\Frontend\IndexController::class, 'storeAdQuery'])->name('ads.query.store');

Route::post('/VisitSchedule-submit', [App\Http\Controllers\Frontend\IndexController::class, 'storeVisitSchedule'])->name('visitschedule.store');


Route::get('/migrate', function(){
    \Artisan::call('migrate');
    dd('migrated!');
});
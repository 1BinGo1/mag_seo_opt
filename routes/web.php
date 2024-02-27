<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('base');
});

Route::get('/metric_data', [\App\Http\Controllers\YandexController::class, 'getMetricData'])->name('get_metric_data');
Route::get('/counters_full', [\App\Http\Controllers\YandexController::class, 'getCountersFull'])->name('get_counters_all');
Route::get('/counters_short', [\App\Http\Controllers\YandexController::class, 'getCountersShort'])->name('get_counters_short');
Route::get('/run_page_speed', [\App\Http\Controllers\GoogleController::class, 'runPageSpeed'])->name('run_page_speed');

Route::get('/header', function () {
    return view('header');
});


Route::get('/cal', function () {
    return view('cal');
});


Route::get('/test2', function () {
    return view('test2');
});

Route::get('/test3', function () {
    return view('test3');
});

Route::get('/test4', function () {
    return view('test4');
});

Route::get('/test5', function () {
    return view('test5');
});

Route::get('/test6', function () {
    return view('test6');
});

Route::get('/auth_ya', function () {
    return view('auth_ya');
});

Route::get('/auth_ya_token', function () {
    return view('auth_ya_token');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('load_data', [\App\Http\Controllers\YandexController::class, 'loadData'])->name('yandex_load_data');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\CropController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::name('crop.')->controller(CropController::class)->group(function() {
    Route::get('/crops' , 'index')->name('index');
    Route::get('/show' , 'show' )->name('show');
    Route::post('/create', 'create')->name('create');
});

require __DIR__.'/auth.php';

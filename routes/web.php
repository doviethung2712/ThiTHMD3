<?php

use App\Http\Controllers\DealerController;
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


Route::prefix('dealer')->group(function () {
    Route::get('index', [DealerController::class, 'index'])->name('dealer.index');
    Route::get('create', [DealerController::class, 'create'])->name('dealer.create');
    Route::post('create', [DealerController::class, 'store'])->name('dealer.store');
    Route::get('update/{id}', [DealerController::class, 'edit'])->name('dealer.edit');
    Route::post('update/{id}', [DealerController::class, 'update'])->name('dealer.update');
    Route::get('delete/{id}', [DealerController::class, 'destroy'])->name('dealer.delete');
    Route::get('/search/',[DealerController::class, 'search'])->name('dealer.search');
});

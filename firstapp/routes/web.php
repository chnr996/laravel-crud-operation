<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstappController;


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
Route::get('/index', [FirstappController::class, 'index'])->name('FirstappController.index');
Route::get('/create', [FirstappController::class, 'create']);
Route::POST('/store', [FirstappController::class, 'store'])->name('FirstappController.store');
//Route::get('/firstapps.edit/{id}',[FirstappController::class, 'edit'])->name('FirstappController.edit'); 
//Route::put('/FirstappController/{id}', [FirstappController::class, 'update'])->name('FirstappController.update');
Route::get('/edit/{id}', [FirstappController::class, 'edit']);

//Route::put('/firstapps.update/{id}',[FirstappController::class, 'update'])->name('FirstappController.update');
Route::put('/edit/{id}', [FirstappController::class, 'update']);

Route::get('/delete/{id}', [FirstappController::class, 'delete']);


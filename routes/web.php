<?php

use App\Http\Controllers\CategoryController;

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


Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/pdf', [CategoryController::class, 'generatePdf'])->name('categories.pdf');



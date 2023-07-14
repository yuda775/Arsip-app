<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/arsip', [CategoryController::class, 'index'])->name('category.index');

// Add Category
Route::post('/arsip', [CategoryController::class, 'store'])->name('category.store');

// Delete Category
Route::delete('/arsip/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Edit Category
Route::get('/arsip/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/arsip/{category}', [CategoryController::class, 'update'])->name('category.update');



Route::get('/arsip/dokumen-masuk', function () {
    return view('arsip.dokumenMasuk');
});

Route::get('/arsip/dokumen-keluar', function () {
    return view('arsip.dokumenKeluar');
});

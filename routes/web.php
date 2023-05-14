<?php

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


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admin.users');
    Route::get('/home/books', [App\Http\Controllers\Admin\BooksController::class, 'index'])->name('admin.books');
    Route::get('/home/books/create', [App\Http\Controllers\Admin\BooksController::class, 'create'])->name('admin.books.create');
    Route::post('/home/books/create', [App\Http\Controllers\Admin\BooksController::class, 'store'])->name('admin.books.store');
    Route::get('/home/books/edit/{id}', [App\Http\Controllers\Admin\BooksController::class, 'edit'])->name('admin.books.edit');
    Route::post('/home/books/edit/{id}', [App\Http\Controllers\Admin\BooksController::class, 'update'])->name('admin.books.update');

    Route::get('/home/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories');
    Route::get('/home/categories/create', [App\Http\Controllers\Admin\CategoriesController::class, 'create'])->name('admin.categories.create');
    Route::post('/home/categories/create', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');
    Route::get('/home/categories/edit/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::post('/home/categories/edit/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.categories.update');


    Route::get('/home/sales', [App\Http\Controllers\Admin\SalesController::class, 'index'])->name('admin.sales');
});

<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
//category routes
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/getSlug', [CategoryController::class, 'create'])->name('categories.create');


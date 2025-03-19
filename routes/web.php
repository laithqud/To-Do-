<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\TaskCategoryController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/products', [ProductsController::class, 'index'])->name('admin.products');
Route::get('/admin/orders', [OrdersController::class, 'index'])->name('admin.orders');


Route::get('/signup', [RegisterController::class, 'show'])->name('register.show');
Route::post('/create-account', [RegisterController::class, 'create'])->name('register.create');

Route::get('/login',[LogInController::class, 'show'])->name('login.show');
Route::post('/login',[LogInController::class, 'check'])->name('login.check');


Route::get('/home',[HomeController::class,'index'])->name('home');
Route::post('/home',[HomeController::class,'add'])->name('add.category');
Route::delete('/categories/{id}', [HomeController::class, 'deleteCategory'])->name('category.delete');


Route::get('/tasks', [TaskCategoryController::class, 'show'])->name('show.task');
Route::post('/tasks', [TaskCategoryController::class, 'addTask'])->name('add.task');
Route::delete('/tasks/{task}', [TaskCategoryController::class, 'destroy'])->name('tasks.destroy');


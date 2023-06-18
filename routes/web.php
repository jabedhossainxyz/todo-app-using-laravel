<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/todos/index', [App\Http\Controllers\TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todos.create');
Route::post('/todos/store', [App\Http\Controllers\TodoController::class, 'store'])->name('todos.store');
Route::get('/todos/show/{id}', [App\Http\Controllers\TodoController::class, 'show'])->name('todos.show');

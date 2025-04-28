<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::post('tasks/{id}/toggle-complete', [TaskController::class, 'toggleComplete'])->name('tasks.toggleComplete');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/index', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/create-task', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/store-task', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/edit-task/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/update-task/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/delete-task/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

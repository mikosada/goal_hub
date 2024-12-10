<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


Route::get('/', [AdminController::class, 'home']);

Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/create_field', [AdminController::class, 'create_field']);

Route::post('/add_field', [AdminController::class, 'add_field']);
Route::get('/view_field', [AdminController::class, 'view_field']);
Route::get('/field_delete/{id}', [AdminController::class, 'field_delete']);

Route::get('/book_field/{id}', [HomeController::class, 'book_field']);
Route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);





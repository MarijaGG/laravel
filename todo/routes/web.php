<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/todos', [ToDoController::class, 'index']);

Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);

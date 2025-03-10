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

Route::post('/diaries', [DiaryController::class, 'store']);
Route::post('/todos', [ToDoController::class, 'store']);

Route::put('/todos/{todo}', [ToDoController::class, 'update']);
Route::put('/diaries/{diary}', [DiaryController::class, 'update']);

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/todos/create', [ToDoController::class, 'create']);
Route::get('/diaries/create', [DiaryController::class, 'create']);

Route::get('/todos/edit/{todo}', [ToDoController::class, 'edit']);
Route::get('/diaries/edit/{diary}', [DiaryController::class, 'edit']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);



<?php

use App\Http\Controllers\JobsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jobs', [JobsController::class, 'list']);
Route::get('/jobs/{id}', [JobsController::class, 'detail']);
Route::post('/jobs', [JobsController::class, 'create']);
Route::get('/jobs/{id}/edit', [JobsController::class, 'edit']);
Route::put('/jobs/{id}', [JobsController::class, 'update']);
Route::delete('/jobs/{id}', [JobsController::class, 'delete']);

<?php

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jobs', [JobController::class, 'list']);
Route::get('/jobs/{id}', [JobController::class, 'detail']);
Route::post('/jobs', [JobController::class, 'create']);
Route::get('/jobs/{id}/edit', [JobController::class, 'edit']);
Route::put('/jobs/{id}', [JobController::class, 'update']);
Route::delete('/jobs/{id}', [JobController::class, 'delete']);

<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return [
        'name' => 'Pritam Kumar Kundu',
        'profession' => 'Software Engineer',
    ];
});

Route::get('/studentList', [StudentController::class, 'studentList']);

Route::post('/studentAdd', [StudentController::class, 'studentAdd']);

Route::put('/studentUpdate', [StudentController::class, 'studentUpdate']);
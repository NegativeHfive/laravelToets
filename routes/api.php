<?php

use App\Http\Controllers\Api\DocentController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\VakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ViewController;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//authenticatie route
Route::post('/login',[AuthController::class,'login']);
Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('teachers',TeacherController::class);
    Route::apiResource('subjects',Subject::class);
});

//register
Route::post('/register', [RegisterController::class, 'create']);

//route voor docenten en vakken
Route::apiResource('teachers', App\Http\Controllers\Api\TeacherController::class);
Route::apiResource('subjects',App\Http\Controllers\Api\TeacherController::class);

//overzicht van alle data
Route::get('/subject-overview',[ViewController::class,'subjects']);
Route::get('/teacher-overview',[ViewController::class,'teachers']);
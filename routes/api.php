<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});

//Student Routes
Route::get('/class', [SclassController::class, 'index']);
Route::post('/class/store', [SclassController::class, 'store']);
Route::get('/class/edit/{id}', [SclassController::class, 'edit']);
Route::post('/class/update/{id}', [SclassController::class, 'update']);
Route::get('/class/delete/{id}', [SclassController::class, 'delete']);

//Student Subjects
Route::get('/subject', [SubjectController::class, 'index']);
Route::post('/subject/store', [SubjectController::class, 'store']);
Route::get('/subject/edit/{id}', [SubjectController::class, 'edit']);
Route::post('/subject/update/{id}', [SubjectController::class, 'update']);
Route::get('/subject/delete/{id}', [SubjectController::class, 'delete']);

//Student Sections
Route::get('/section', [SectionController::class, 'index']);
Route::post('/section/store', [SectionController::class, 'store']);
Route::get('/section/edit/{id}', [SectionController::class, 'edit']);
Route::post('/section/update/{id}', [SectionController::class, 'update']);
Route::get('/section/delete/{id}', [SectionController::class, 'delete']);

//Student Student
Route::get('/student', [StudentController::class, 'index']);
Route::post('/student/store', [StudentController::class, 'store']);
Route::get('/student/edit/{id}', [StudentController::class, 'edit']);
Route::post('/student/update/{id}', [StudentController::class, 'update']);
Route::get('/student/delete/{id}', [StudentController::class, 'delete']);



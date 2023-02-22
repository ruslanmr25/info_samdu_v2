<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login'])->middleware('login');

Route::get('tekshirish',[AuthController::class,'test1']);

Route::apiResource('/students',  StudentController::class);

Route::post('/students/study_information',[StudentController::class,'create_study_information']);


Route::post('/students/additional',[StudentController::class,'create_place_of_residence']);
Route::post('/students/relatives',[StudentController::class,'relatives']);



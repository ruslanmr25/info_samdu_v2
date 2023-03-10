<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Hemis\HemisController;
use App\Http\Controllers\Search;
use App\Http\Controllers\StudentController;

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


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login'])->middleware('login');


Route::apiResource('/students',  StudentController::class);
Route::post('/students/study_information', [StudentController::class, 'create_study_information']);
Route::post('/students/additional', [StudentController::class, 'create_place_of_residence']);
Route::post('/students/relatives', [StudentController::class, 'relatives']);








Route::group(['prefix' => 'hemis', ], function () {




    Route::get('image/{student}', [HemisController::class, 'image'])->name('image');
    Route::get('students/{student}', [HemisController::class, 'show']);
    Route::get('curriculum-list',[HemisController::class,'curriculum_list']);
    Route::get('group-list',[HemisController::class,'group_list']);
    Route::get('department-list',[HemisController::class,'department_list']);





});




Route::group(['prefix' => 'tutor', 'middleware' => ['auth:sanctum', 'role:tutor']], function () {
    Route::apiResource('/students',  StudentController::class);
    Route::post('/students/study_information', [StudentController::class, 'create_study_information']);
    Route::post('/students/additional', [StudentController::class, 'create_place_of_residence']);
    Route::post('/students/relatives', [StudentController::class, 'relatives']);
});


Route::group(['prefix' => 'dean', 'middleware' => ['auth:sanctum', 'role:dean']], function () {


    Route::post('create/tutors', [AuthController::class, 'register_tutor']);
});




Route::group(['prefix' => 'student-staff', 'middleware' => ['auth:sanctum', 'role:student_staff']], function () {


    Route::get('/students', [StudentController::class, 'index']);
    Route::get('students/{student}', [StudentController::class, 'show']);
});


Route::get('/search', Search::class);

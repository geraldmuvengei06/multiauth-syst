<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/'], function(){

    Route::apiResource('campus', "CampusController");

    Route::apiResource('departments', "DepartmentController");

    Route::apiResource('courses', "CourseController");

    Route::apiResource('classes', "KlassController");

    Route::apiResource('units', "UnitController");

    Route::apiResource('sessions', "SessionController");

    Route::apiResource('exams', "ExamController");

});

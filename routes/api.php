<?php

use Illuminate\Http\Request;
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

Route::prefix('/v1')->group(function () {
    Route::prefix('/jobs')->group(function () {
        Route::apiResource('/', 'App\Http\Controllers\JobController');
        Route::get('/{idJob}/candidatures/ranking', ['App\Http\Controllers\CandidatureController', 'ranking']);
    });
    Route::apiResource('/applicants', 'App\Http\Controllers\ApplicantController');
    Route::apiResource('/candidatures', 'App\Http\Controllers\CandidatureController');
});

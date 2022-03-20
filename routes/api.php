<?php

use App\Http\Controllers\Api\DayController;
use App\Http\Controllers\Api\BrotherController;
use App\Http\Controllers\Api\AssistanceController;
use App\Http\Controllers\Api\VisitController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(DayController::class)->group(function () {
    Route::get('/days', 'index');
    Route::post('/days', 'store');
    Route::get('/day/{id}', 'show');
});

Route::controller(BrotherController::class)->group(function () {
    Route::get('/brothers', 'index');
    Route::post('/brothers', 'store');
    Route::get('/brother/{brother_id}', 'show');
    Route::put('/brother/{brother_id}', 'update');
    Route::delete('/brother/{brother_id}', 'destroy');
});

Route::controller(VisitController::class)->group(function () {
    Route::get('/visits', 'index');
    Route::post('/visits', 'store');
    Route::get('/visit/{visit_id}', 'show');
    Route::put('/visit/{visit_id}', 'update');
    Route::delete('/visit/{visit_id}', 'destroy');
});

Route::controller(AssistanceController::class)->group(function () {
    Route::get('/assistances', 'index');
    Route::post('/assistances', 'store');
    Route::get('/assistance/{assistance_id}', 'show');
    Route::put('/assistance/{assistance_id}', 'update');
    Route::delete('/assistance/{assistance_id}', 'destroy');
});

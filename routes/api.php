<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\JobsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'candidates'], function () {
    Route::get('/', [CandidatesController::class, 'index']);
    Route::get('{id}/getbyid', [CandidatesController::class, 'getbyid']);
    Route::post('/', [CandidatesController::class, 'store']);
    Route::put('/{id}', [CandidatesController::class, 'update']);
    Route::delete('/{id}',  [CandidatesController::class, 'destroy']);

    Route::post('/apply', [CandidatesController::class,'apply']);
    Route::get('/{id}/applicationsById', [CandidatesController::class,'applicationsById']);
    Route::get('/applications', [CandidatesController::class, 'applications']);
    Route::delete('/{id}/cancelapplication', [CandidatesController::class,'cancelApplication']);
});

Route::group(['prefix' => 'jobs'], function () {
    Route::get('/', [JobsController::class, 'index']);
    Route::get('{id}/getbyid', [JobsController::class, 'getbyid']);
    Route::get('/open', [JobsController::class, 'jobsOpen']);
    Route::post('/', [JobsController::class, 'store']);
    Route::put('/{id}', [JobsController::class, 'update']);
    Route::delete('/{id}', [JobsController::class, 'destroy']);
});
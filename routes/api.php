<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobListingApiController;

Route::get('/validation-test', [JobListingApiController::class, 'index']);

Route::post('/validation-test', [JobListingApiController::class, 'store']);

Route::put('/validation-test/{id}', [JobListingApiController::class, 'update']);

Route::patch('/validation-test/{id}', [JobListingApiController::class, 'updatePartial']);

Route::delete('/validation-test/{id}', [JobListingApiController::class, 'destroy']);
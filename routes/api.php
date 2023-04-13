<?php

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
Route::apiResource('v1/houses', App\Http\Controllers\Api\V1\HouseController::class)->only('show');
Route::apiResource('v1/roads', App\Http\Controllers\Api\V1\RoadsController::class)->only('show');
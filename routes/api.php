<?php

use App\Http\Controllers\API\AuthController;
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
//API route for login user
Route::post('/login', [AuthController::class, 'login']);

Route::resource('samarinda',\App\Http\Controllers\API\SamarindaAPIController::class);
Route::resource('balikpapan',\App\Http\Controllers\API\BalikpapanAPIController::class);
Route::resource('berau',\App\Http\Controllers\API\BerauAPIController::class);
Route::resource('bontang',\App\Http\Controllers\API\BontangAPIController::class);
Route::resource('kubar',\App\Http\Controllers\API\KubarAPIController::class);
Route::resource('kukar',\App\Http\Controllers\API\KukarAPIController::class);
Route::resource('kutim',\App\Http\Controllers\API\KutimAPIController::class);
Route::resource('mahakam',\App\Http\Controllers\API\MahakamAPIController::class);
Route::resource('paser',\App\Http\Controllers\API\PaserAPIController::class);
Route::resource('penajam',\App\Http\Controllers\API\PenajamAPIController::class);

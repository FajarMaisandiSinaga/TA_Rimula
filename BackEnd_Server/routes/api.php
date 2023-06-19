<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\RiwayatController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/pasiens', [PasienController::class, 'viewAll']);
Route::get('/pasiens/{parameter}', [PasienController::class, 'detail']);
Route::post('/pasiens', [PasienController::class, 'store']);
Route::put('/pasiens/{parameter}', [PasienController::class, 'update']);
Route::delete('/pasiens/{parameter}', [PasienController::class, 'destroy']);
Route::get('/riwayats', [RiwayatController::class, 'index']);

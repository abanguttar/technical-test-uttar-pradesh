<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorIncomeController;
use App\Http\Controllers\UserClassWatchTimeController;

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


/**
 * Endpoint untuk menghitung dan mengembalikan hasil pembagian kepada 
 * mentor berdasarkan durasi waktu tonton.
 */
Route::get('/v1/show-mentor-income', [MentorIncomeController::class, 'showIncome']);

/**
 * Endpoint untuk mencatat waktu tonton pengguna.
 */

Route::post('/v1/update-watch-time', [UserClassWatchTimeController::class, 'updateWatchTime']);

<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);

Route::get('cache-img/{folder}/{file}', [Controller::class, 'cacheImg']);

/**
 * Catatan **
 * Karena run secara local pastikan run server untuk api di port berbeda misal port 8001
 */
Route::get('/testing-fetch-income', function () {
    $title = 'Testing Fetch Income';
    return view('admin/test/index', compact('title'));
});

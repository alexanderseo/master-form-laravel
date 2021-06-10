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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/**
 * Основной путь, для отправки данных с формы
 */
Route::middleware('api')->post('/main-form', 'App\Http\Controllers\MainForm\MainForm@writeOrder');

Route::middleware('api')->get('/orders', 'App\Http\Controllers\OrderList\OrderList@get');

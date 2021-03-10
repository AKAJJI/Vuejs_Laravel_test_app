<?php

use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionsApiController;

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

Route::get('/transaction',[TransactionsApiController::class,'index']);
Route::post('/transaction',[TransactionsApiController::class,'store']);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::post('purchase', 'CoinpaymentsController@purchaseItems');
Route::post('donate', 'CoinpaymentsController@donation');
Route::post('ipn', 'CoinpaymentsController@validateIpn');

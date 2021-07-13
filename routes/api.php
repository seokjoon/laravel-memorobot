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


 Route::group(['as' => 'api.', 'middleware' => []], function() {
     Route::group(['prefix' => 'v1/test', 'as' => 'v1.test.'], function() {
         require_once 'api_test_v1.php';
     });
 });

//\Illuminate\Support\Facades\Log::info('======== ========');
//DB::listen(function($query) { \Illuminate\Support\Facades\Log::info($query->sql); });
//DB::listen(function($query) { dump($query->sql); });

//\Illuminate\Support\Facades\Log::info(request()->path());
//\Illuminate\Support\Facades\Log::info(request()->fullUrl());

<?php

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

//Route::get('/', function () { return view('welcome'); });
Route::get('/', function () { return view('mr1'); });
//Route::get('/', function () { return File::get(public_path('react-test-r3/index.html')); });

//////// vue BEGIN
Route::any('/react-test-r3/{path}', function () { return File::get(public_path('react-test-r3/index.html')); });
Route::any('/react-test-r3/{path}/{pathSub}', function () { return File::get(public_path('react-test-r3/index.html')); });
Route::any('/react-test-r3/{path}/{pathSub}/{pathDescendant}', function () { return File::get(public_path('react-test-r3/index.html')); });

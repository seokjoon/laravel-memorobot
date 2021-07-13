<?php

//개별 메소드는 RESOURCE 보다 먼저 선언되어야 함

//////// DELETE BEGIN
//////// DELETE END


//////// GET BEGIN
//////// GET END


//////// POST BEGIN
//////// POST END


//////// PUT/PATCH BEGIN
//////// PUT/PATCH END


//////// RESOURCE BEGIN
\Illuminate\Support\Facades\Route::resources([
    '/users' => \App\Http\Controllers\Api\v1\test\User\UsersController::class,
]);
//////// RESOURCE END


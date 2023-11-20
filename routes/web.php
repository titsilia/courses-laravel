<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [CourseController::class, 'index']);

Route::post('/enroll', [ApplicationController::class, 'new_application']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/auth', [AuthController::class, 'auth']);

Route::post('/auth_user', [AuthController::class, 'auth_user']);

Route::get('/reg', [AuthController::class, 'reg']);

Route::post('/reg_user', [AuthController::class, 'reg_user']);

Route::get('/exit', [AuthController::class, 'exit']);

Route::get('/application/{id_application}/confirm', [ApplicationController::class, 'confirm']);

Route::post('/course/create', [CourseController::class, 'create']);
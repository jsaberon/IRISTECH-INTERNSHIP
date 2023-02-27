<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;
use illuminate\http\Response;
use Illuminate\Routing\Controllers\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//route::get();
//route::post();
//route::put();
//route::patch();
//route::delete();
//route::options();

//Common routes naming
//index - show all data or students
//show - show a single data or student
//create - show a form to add new user
//store - store a data
//edit - show form to a data
//update - update a data
//destroy - delete a data

Route::get('/',[StudentController::class, 'index'])->middleware('auth');
Route::get('/register',[UserController::class, 'registers']);
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process',[UserController::class,'process']);

Route::post('/logout',[UserController::class,'logout']);


Route::post('/store',[UserController::class,'store']);


Route::get('/add/student',[StudentController::class , 'create']);
Route::post('/add/student',[StudentController::class, 'store']);

Route::get('/students/{id}',[StudentController::class, 'show']);
Route::put('/student/{student}',[StudentController::class, 'update']);
Route::delete('/student/{student}',[StudentController::class, 'destroy']);
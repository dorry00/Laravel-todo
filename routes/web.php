<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todo;
use App\Http\Controllers\TodosController;

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




Route::get('/' , [TodosController::class,'index']);

Route::get('/create',[TodosController::class,'create']);

Route::get('/savetodos',[TodosController::class,'store']);

Route::get('/delete/{id}',[TodosController::class,'destroy']);

Route::get('edit/{id}',[TodosController::class,'edit']);
Route::get('update/{id}',[TodosController::class,'update']);

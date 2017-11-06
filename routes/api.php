<?php

use Illuminate\Http\Request;

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
Route::get('/todos', 'TodoController@getTodo');
Route::post('/todo', 'TodoController@postTodo');
Route::put('/todo/{id}', 'TodoController@updateTodo');
Route::patch('/todo/{id}', 'TodoController@updateStatus');
Route::delete('/todo/{id}', 'TodoController@destroyTodo');

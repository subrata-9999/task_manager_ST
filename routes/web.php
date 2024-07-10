<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;

Route::get('/', [AuthController::class, 'go_to_register']);


Route::get('register', [AuthController::class, 'go_to_register']);
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'go_to_login']);
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);   

Route::get('Dashboard', [DashboardController::class, 'index']);

Route::get('AddTask', [TaskController::class, 'go_to_addTask']);
Route::post('addTask', [TaskController::class, 'addTask']);
Route::get('EditTask/{task_id}', [TaskController::class, 'editTask']);
Route::post('updateTask', [TaskController::class, 'updateTask']);
Route::get('DeleteTask/{task_id}', [TaskController::class, 'deleteTask']);

Route::get('UserDetails', function(){
    return view('UserDetails');
});
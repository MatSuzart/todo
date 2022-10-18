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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('task.create_action');
route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
route::get('/task/edit', [TaskController::class, 'edit_action'])->name('task.edit_action');
Route::get('/task', [TaskController::class, 'create'])->name('task.create');

Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::get('/login',[AuthController::class, 'login_action'])->name('login_action');
Route::get('/register',[AuthController::class, 'register'])->name('logregisterin');

/*Route::get('/', function () {
    return view('home');
});

Route::get('/login', function(){
    return view('login');
});


<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('inicio');
})->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/loginUser', [UserController::class, 'loginUser'])->name('user.loginUser');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::middleware('auth')->group(function () {
    Route::get('/index', [IndexController::class, 'index'])->name('index');
    Route::get('/index/users', [UserController::class, 'indexUser'])->name('user.index');
    Route::get('/index/newuser', [UserController::class, 'newUser'])->name('user.new');
});
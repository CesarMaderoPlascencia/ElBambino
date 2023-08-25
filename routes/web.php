<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VentaController;
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
    
    //Usuarios
    Route::get('/usuarios', [UserController::class, 'indexUser'])->name('user.index');
    Route::get('/usuarios/nuevo', [UserController::class, 'newUser'])->name('user.new');
    Route::post('/usuarios/ingresar', [UserController::class, 'ingresar'])->name('user.ingresar');
    Route::get('/usuarios/lista', [UserController::class, 'lista'])->name('user.lista');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;

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

Route::get('/Home', function (){
    return view('home');
}) -> name('home');
Route::prefix('user') -> group(function () {
    Route::get('/login', [UserController::class, 'getLogin']) -> name('login');
    Route::post('/login', [UserController::class, 'setLogin']);
    Route::get('/register', [UserController::class, 'getRegister']) -> name('register');
    Route::post('/register', [UserController::class, 'setRegister']);
    Route::get('/contact', [UserController::class, 'contact'])->name('contact');
    Route::get('/forgotPassword', [UserController::class, 'forgotPassword'])->name('forgot');

});
Route::prefix('admin') -> group(function () {
    Route::get('/', [AdminController::class, 'index']) -> name('HomeAdmin');
});


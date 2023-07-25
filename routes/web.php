<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
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
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'showLoginForm')->name('login');
    Route::post('login', 'login')->name('login.submit');
    Route::get('register', 'showRegistrationForm')->name('register');
    Route::post('register', 'register')->name('register.submit');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::group(['middleware' => 'auth'], function () {
    Route::controller(SiswaController::class)->prefix('siswa')->group(function () {
        Route::get('', 'index')->name('siswa');
        Route::get('create', 'create')->name('siswa.create');
        Route::post('store', 'store')->name('siswa.store');
        Route::get('show/{id}', 'show')->name('siswa.show');
        Route::get('edit/{id}', 'edit')->name('siswa.edit');
        Route::put('edit/{id}', 'update')->name('siswa.update');
        Route::delete('destroy/{id}', 'destroy')->name('siswa.destroy');
    });
});

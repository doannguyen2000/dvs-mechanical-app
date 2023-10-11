<?php

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

Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::get('register', function () {
    return view('auth.register');
})->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('page.home.home');
    })->name('home');
    Route::prefix('users')->group(function () {
        Route::get('/', function () {
            return view('page.users.get-list');
        })->name('users.getList');
        Route::get('{id}', function () {
            return view('page.users.show');
        })->name('users.show');
        Route::get('{id}/jobs', function () {
            return view('page.users.get-job');
        })->name('users.getJob');
        Route::get('{id}/attendances', function () {
            return view('page.users.get-attendance');
        })->name('users.getAttendance');
    });
});

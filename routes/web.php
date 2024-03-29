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
        Route::get('', function () {
            return view('page.users.get-list');
        })->name('users.get-list');
        //users-salaries
        Route::prefix('salaries')->group(function () {
            Route::get('', function () {
                return view('page.users.salaries.get-salary-user');
            })->name('users.salaries.get-list');
            Route::get('{id}/salary-detail', function () {
                return view('page.users.salaries.show-salary-user');
            })->name('users.salaries.show-salary-user');
        });
        //
        Route::get('{id}', function () {
            return view('page.users.show');
        })->name('users.show');
        //users-job
        Route::prefix('{id}/jobs')->group(function () {
            Route::get('', function () {
                return view('page.users.get-job');
            })->name('users.jobs.get-list');
            Route::get('{jobId}', function () {
                return view('page.users.jobs.show-job-user');
            })->name('users.jobs.show-job-user');
        });
        //
        // users-attendances
        Route::prefix('{id}/attendances')->group(function () {
            Route::get('', function () {
                return view('page.users.get-attendance');
            })->name('users.attendances.get-list');
            Route::get('{attendanceId}', function () {
                return view('page.users.attendances.show-attendance-user');
            })->name('users.attendances.show-attendance-user');
        });
        //
    });
});

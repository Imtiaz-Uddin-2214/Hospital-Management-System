<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//AuthController
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//UserController
Route::get('/users', [UserController::class, 'index'])->name('admin.index');
Route::post('/users/store', [UserController::class, 'store'])->name('admin.store');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.edit');
Route::post('/users/update/{id}', [UserController::class, 'update'])->name('admin.update');
Route::post('/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.destroy');


//DoctorController
Route::prefix('admin')->group(function () {
    Route::get('/doctors', [DoctorController::class, 'index'])->name('admin.doctors.index');
    Route::post('/doctors/store', [DoctorController::class, 'store'])->name('admin.doctors.store');
    Route::post('/doctors/update/{id}', [DoctorController::class, 'update'])->name('admin.doctors.update');
    Route::post('/doctors/destroy/{id}', [DoctorController::class, 'destroy'])->name('admin.doctors.destroy');
});
Route::post('/doctors/status/{id}', [DoctorController::class, 'toggleStatus'])->name('admin.doctors.status');

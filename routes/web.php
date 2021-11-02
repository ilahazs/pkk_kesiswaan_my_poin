<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('index', ['title' => 'Home Page']);
})->name('index');

Route::get('/home', function () {
    return view('index', ['title' => 'Home Page']);
})->name('home');

Route::get('/about', [BasicController::class, 'about'])->name('about');

// Auth: Login
Route::get('/login', [LoginController::class, 'index'])->name('login-page')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-authenticate');
Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');

// Auth: Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register-page');
Route::post('/register', [RegisterController::class, 'store'])->name('register-authenticate');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', ['title' => 'Dashboard', 'content' => 'dashboard']);
})->middleware('auth')->name('dashboard');

// Siswa
// Route::resource('/students', StudentController::class)->name('student');
Route::resource('/students', StudentController::class)->middleware('auth');

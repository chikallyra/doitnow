<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\RegistrasiController;
use Faker\Guesser\Name;


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
    return view('home');
})->name('index');

// Registrasi
Route::get('/registrasi', [RegistrasiController::class, 'index'])->middleware(['guest'])->name('register');
Route::post('/registrasi/company', [RegistrasiController::class, 'company'])->name('register.company');
Route::post('/registrasi/user', [RegistrasiController::class, 'user'])->name('register.user');

// Login
Route::get('/login', [LoginController::class, 'index'])->middleware(['guest'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');


//Auth User
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Auth Company
Route::middleware(['auth', 'user-access:company'])->group(function () {
  
    Route::get('/company/home', [HomeController::class, 'companyHome'])->name('company.home');
});

//Auth Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::get('/login', function () {
    return view('login.index');
})->name('login');

// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::post('logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');

// Registrasi
Route::get('/registrasi', [RegistrasiController::class, 'index']);

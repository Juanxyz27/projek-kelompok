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

// Route::get('/', function () {
//     return view('welcome');
// });

// kode route penggilan method di dalam folder "app/Http/controllers.."
// ====================================================================
// untuk menampilkan register
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'regis'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register');
Route::view('/dashboard', 'dashboard')->name('dashboard');
// untuk menampilakn login
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenicate'])->name('login');
// untuk mencegah user mengakses form pendaftaran berkali" dengan middleware
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'regis'])->name('register')->middleware('guest');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register')->middleware('guest');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');

// membuat fungsi logout
Route::post('/logout', function(){
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout')->middleware('auth');
Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
// ====================================================================


// Route::view('/register', function () {
//     return('auth.register');
// });

Route::get('/', function () {
    return view('layouts.landing');
});

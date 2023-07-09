<?php

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

Route::get('/',function() {
    return view('auth.login');
})->middleware('guest');

Route::get('/sign-up',function() {
    return view('signup');
});

Route::get('/data-reservasi',function() {
    return view('data-reservasi');
});

Route::get('/reservasi',function() {
    return view('reservasi');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'showSide']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/beranda',function() {
    return view('beranda');
});

Route::get('/info',function() {
    return view('info');
});

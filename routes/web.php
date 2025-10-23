<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/login', [PageController::class, 'loginPage'])->name('login.page');
Route::post('/login', [PageController::class, 'doLogin'])->name('login.do');

Route::post('/logout', function (Request $request) {
    $request->session()->forget('username');
    return redirect()->route('login.page');
})->name('logout');

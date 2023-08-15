<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\StoreController;
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
// guest routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/', function () {
        return view('auth.login');
    });
    
    Route::get('/register', function () {
        return view('auth.register');
    });
});

// protected routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [StoreController::class, "index"]);
    Route::get('/stores/{id}', [StoreController::class, 'show'])->name('show');
});

require __DIR__.'/auth.php';

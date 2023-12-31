<?php

use App\Http\Controllers\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// protected routes
Route::middleware(['auth'])->group(function () {
    Route::post('/store', [StoreController::class, "store"])->name('store');
    Route::patch('/update/{id}', [StoreController::class, "update"])->name('update');
    Route::delete('/delete/{id}', [StoreController::class, "delete"])->name('delete');
});

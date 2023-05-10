<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('frontHome');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('frontProfile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('frontEditProfile');
}); 

<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
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
//     Route::get('/home', [FrontendController::class, 'index'])->name('frontHome');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [FrontendController::class, 'index'])->name('frontHome');
});

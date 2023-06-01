<?php

use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplySeekerController;
use App\Http\Controllers\ListWarungController;
use App\Http\Controllers\InputWarungController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PointController;
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

Auth::routes();

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [OnboardingController::class, 'index'])->name('onboarding');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register',[RegisterController::class, 'store'])->name('register');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::match(['get', 'delete'],'/logout', [LogoutController::class, 'destroy'])->name('logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('frontProfile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('frontEditProfile');
    Route::get('/applyseeker', [ApplySeekerController::class, 'edit'])->name('viewApplySeeker');
    Route::put('/applyseeker', [ApplySeekerController::class, 'update'])->name('updateApplySeeker');
    Route::get('/listwarung', [ListWarungController::class, 'index'])->name('viewListWarung');
    Route::post('/listwarung', [ListWarungController::class, 'filterIndex'])->name('viewFilterListWarung');
    Route::get('/inputwarung', [InputWarungController::class, 'create'])->name('viewinputWarung');
    Route::post('/inputwarung', [InputWarungController::class, 'store'])->name('inputWarung');
    Route::get('/admin', [AdminController::class, 'edit'])->name('viewAdmin');
    Route::put('/admin/warung/{id}', [AdminController::class, 'updateWarung'])->name('updateWarung');
    Route::put('/admin/user/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
    Route::get('/point', [PointController::class, 'edit'])->name('point');
    Route::put('/point', [PointController::class, 'update'])->name('updatePoint');
});

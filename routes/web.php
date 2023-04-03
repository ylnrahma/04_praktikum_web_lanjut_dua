<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;

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
    return view('auth.login');
});

//Route::get('/home', [HomeController::class,'index'])->name('dashboard');
Route::get('/dashboard', [DasboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/kuliah', [KuliahController::class, 'index'])->name('kuliah');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Auth::routes();

Route::get('/home', function () {
    $user = Auth::user();
        return view('layouts.app',['user'=>$user]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
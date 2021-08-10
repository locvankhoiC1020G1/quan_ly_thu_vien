<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PageController;
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

Route::get('/master', function () {
    return view('master');
});
Route::get('',[PageController::class,'index'])->name('home');
Route::get('/{id}/details',[PageController::class,'detail'])->name('book.detail');

Route::prefix('/admin')->group(function (){
    Route::get('/index',[BookController::class,'index'])->name('book.home');
    Route::get('/create',[BookController::class,'createBook'])->name('book.create');
    Route::post('/create',[BookController::class,'store'])->name('book.store');
    Route::get('/{id}/edit',[BookController::class,'editBook'])->name('book.edit');
    Route::post('/{id}/update',[BookController::class,'update'])->name('book.update');
    Route::get('/{id}/delete',[BookController::class,'delete'])->name('book.delete');
    Route::get('/search',[BookController::class,'search'])->name('book.search');
});
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

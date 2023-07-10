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

// Route::get('/', function () {
//     return view('Register');
// });
// Route::get('/login', function () {
//     return view('login');
// });

// Route::middleware(['auth','PreventBackHistory'])->group(function(){
// Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
// });
// Route::middleware(['guest','PreventBackHistory'])->group(function(){
// Route::get('/login', [App\Http\Controllers\UserController::class, 'LoginIndex'])->name('LoginIndex');
// Route::get('/', [App\Http\Controllers\UserController::class, 'RegisterIndex'])->name('RegisterIndex');
// Route::post('/check', [App\Http\Controllers\UserController::class, 'Login'])->name('Login');
// Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('storeUser');
// });
Route::middleware(['auth','PreventBackHistory'])->group(function(){
Route::get('/' , App\Http\Livewire\Home::class)->name('home');
});
Route::middleware(['guest','PreventBackHistory'])->group(function(){
Route::get('/register' , App\Http\Livewire\Register::class)->name('register');
Route::get('/login' , App\Http\Livewire\Login::class)->name('login');
});

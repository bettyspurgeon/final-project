<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Middleware\PropertyController:
use App\Http\Middleware\EnsureIsLoggedIn:





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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/properties', [PropertyController::class, 'index']);
Route::get('/properties/create', [PropertyController::class, 'create'])->middleware(EnsureIsLoggedIn::class);

require __DIR__.'/auth.php';


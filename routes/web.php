<?php
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('users', [UserController::class,'index'])->name('users.index');
Route::get('users/create', [UserController::class,'create'])->name('users.create');
Route::get('users/{user}', [UserController::class,'show'])->name('users.show')->where('user','[0-9]+');
Route::post('users/{user}', [UserController::class,'store'])->name('users.store');
Route::get('users/{user}/edit', [UserController::class,'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class,'update'])->name('users.update');
Route::delete('users/{user}', [UserController::class,'destroy'])->name('users.destroy');
Route::fallback(function(){return redirect('/');});


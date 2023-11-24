<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PayeeController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/transaction', [TransactionController::class, 'store']);

Route::get('payees',[App\Http\Controllers\Admin\UserController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('payees/{payee_id}',[App\Http\Controllers\Admin\UserController::class, 'edit'])->middleware(['auth', 'verified']);

Route::get('history',[App\Http\Controllers\Admin\UserController::class, 'history'])->middleware(['auth', 'verified']);

Route::get('/dashboard',[App\Http\Controllers\Admin\UserController::class, 'history'])->middleware(['auth', 'verified']);

Route::get('addpayee', function(){return view('addpayee');});

Route::get('addemail', function(){return view('addemail');});

Route::get('addaccount', function(){return view('addaccount');});

Route::get('/accno', [PayeeController::class, 'store']);

Route::get('/email', [PayeeController::class, 'store']);


require __DIR__.'/auth.php';

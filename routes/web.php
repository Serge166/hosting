<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PochetteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TunnelController;
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
    return view('index');
});


// Route::get('/facture-pochette', [PochetteController::class,'index'])->name('facture-pochette');

Route::get('/pochette/create', [PochetteController::class,'create'])->name('pochette.create');

Route::post('/pochette/store', [PochetteController::class,'store'])->name('pochette.store');

Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/dashboard', [ProductController::class,'index'])->name('dashboard.index');



Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/ajouter', [CartController::class, 'ajouter'])->name('cart.ajouter');
Route::put('/cart/mettre-a-jour/{id}', [CartController::class, 'mettreAJour'])->name('cart.mettre-a-jour');
Route::delete('/cart/supprimer/{id}', [CartController::class, 'supprimer'])->name('cart.supprimer');
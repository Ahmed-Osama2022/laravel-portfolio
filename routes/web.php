<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
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
  return view('homePage');
})->name('home');


Route::get('/about', function () {
  return view('pages.about');
});

Route::get('/services', function () {
  return view('pages.services');
});

Route::get('/work', function () {
  return view('pages.work');
});

Route::get('/contact', function () {
  return view('pages.contact');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/info', [InformationController::class, 'index']);
Route::post('/info', [InformationController::class, 'store'])->middleware('auth');
Route::patch('/info', [InformationController::class, 'edit'])->middleware('auth');
Route::delete('/info', [InformationController::class, 'destroy'])->middleware('auth');


// Route::get('/work', [App\Http\Controllers\HomeController::class, 'index']);

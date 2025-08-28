<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\WorkController;

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

// Route::get('/work', function () {
//   return view('pages.work');
// });

// Route::get('/contact', function () {
// return view('pages.contact');
// });

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/contact', [InformationController::class, 'index']);
Route::post('/info', [InformationController::class, 'store'])->middleware('auth');
Route::patch('/contact', [InformationController::class, 'edit'])->middleware('auth');
Route::delete('/info', [InformationController::class, 'destroy'])->middleware('auth');

Route::patch('/info/cv', [InformationController::class, 'edit_CV'])->middleware('auth');


Route::get('/work', [WorkController::class, 'index']);
Route::post('/work', [WorkController::class, 'store'])->middleware('auth');
Route::get('/work/{id}', [WorkController::class, 'show'])->middleware('auth')->name('work.show');
Route::patch('/work/{id}', [WorkController::class, 'edit'])->middleware('auth')->name('work.update');
Route::delete('/work/{id}', [WorkController::class, 'destroy'])->middleware('auth')->name('work.delete');

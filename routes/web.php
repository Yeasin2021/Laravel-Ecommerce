<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forget', function () {
    return view('auth.forget');
})->name('forget');

Route::get('/home', function () {
    return view('admin.pages.dashboard');
})->name('home');


Route::get('/single-feature', function () {
    return view('admin.pages.form.single-feature');
})->name('feature');

Route::post('/single-feature-post', [FeatureController::class,'store'])->name('feature-post');
Route::get('/single-feature-data', [FeatureController::class,'show'])->name('feature-data');
Route::get('/single-feature-edit-data/{id}', [FeatureController::class,'editForm'])->name('feature-edit-data');
Route::post('/single-feature-update-data/{id}', [FeatureController::class,'update'])->name('feature-update-data');
Route::any('/single-feature-delete-data/{id}', [FeatureController::class,'delete'])->name('feature-delete-data');


<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\userController;
use App\Http\Controllers\leçonController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\matiereController;
use App\Http\Controllers\formationController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('matieres', matiereController::class)->middleware(['auth', 'verified']);
Route::resource('users', userController::class)->middleware(['auth', 'verified', 'role']);
Route::resource('formation', formationController::class)->middleware(['auth', 'verified']);
Route::resource('leçon', leçonController::class)->middleware(['auth', 'verified']);

Route::get('video-upload', [ VideoController::class, 'getVideoUploadForm' ])->name('get.video.upload');
Route::post('video-upload', [ VideoController::class, 'uploadVideo' ])->name('store.video');

Route::get('pdf-upload', [ PdfController::class, 'getpdfUploadForm' ])->name('get.pdf.upload');
Route::post('pdf-upload', [ PdfController::class, 'uploadpdf' ])->name('store.pdf');

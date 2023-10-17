<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Models\Book;
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
    return view('pages.welcome');
});
Route::get('/', function () {
    return view('landing');
});
Route::get('/about', function () {
    $title = 'About Us';
    $description = 'Blogging is website for sharing your thoughts and ideas with the world.';
    $button = '<a class="btn btn-lg btn-secondary" href="/">Back to Landing Page</a>';
    return view('about', compact('title', 'description', 'button'));
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/', LandingController::class);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'store']);
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us.index');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact-us.store');
Route::resource('books', BookController::class);

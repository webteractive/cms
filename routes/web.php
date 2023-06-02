<?php

use App\Http\Controllers\content;
use App\Http\Controllers\landingpage;
use App\Http\Controllers\ProfileController;
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
Route::get('/landingpage', function () {
    return view('landingpage');
});
Route::get('/News', function () {
    return view('News');
}); 
Route::get('/Blogs', function () {
    return view('Blogs');
}); 
Route::get('/Tutorial', function () {
    return view('Tutorial');
});
Route::get('/Video', function () {
    return view('Video');
});
Route::get('/tileview', function () {
    return view('tileview');
});
Route::get('/Viewmoree', function () {
    return view('Viewmoree');
});



Route::get('/landingpage',[landingpage::class, 'index'])->name('landingpage');

Route::get('/content',[content::class, 'index'])->name('content');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

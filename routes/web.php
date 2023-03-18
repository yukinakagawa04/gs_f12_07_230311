<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CommentController;



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

Route::middleware('auth')->group(function () {
    // いいねの機能
    Route::post('content/{content}/favorites', [FavoriteController::class, 'store'])->name('favorites');
    Route::post('content/{content}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');
    Route::get('/content/mypage', [ContentController::class, 'mydata'])->name('content.mypage');
    Route::resource('content', ContentController::class);
});

Route::resource('tweet', TweetController::class);
Route::resource('partner', PartnerController::class);
Route::resource('content', ContentController::class);
Route::resource('comment', CommentController::class);


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



require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
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
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/location', function () {
    return view('pages.location');
})->name('location');

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [PostController::class, 'show'])->name('posts.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/reclamacoes', [ReportController::class, 'list'])->middleware(['auth', 'verified'])->name('listReport');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reclamacoes', [ReportController::class, 'list'])->name('pages.listReport');

});

Route::get('/dashboard/create', [ReportController::class, 'index'])->name('reports.create');
Route::post('/dashboard', [ReportController::class, 'store'])->name('reports.store');
Route::get('/dashboard/reclamacoes', [ReportController::class, 'show'])->name('reports.show');

require __DIR__.'/auth.php';
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ZyboController;


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


Route::get('/zybo',[ZyboController::class,'index'])->name('zybo');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); 



// Routes for BannerImageController
Route::get('/banner-images', [BannerController::class, 'index'])->name('banner-images.index');
Route::get('/banner-images/create', [BannerController::class, 'create'])->name('banner-images.create');
Route::post('/banner-images', [BannerController::class, 'store'])->name('banner-images.store');


 Route::get('/banner-images/{id}', [BannerController::class, 'show'])->name('banner-images.show');
 Route::get('/banner-images/{id}/edit', [BannerController::class, 'edit'])->name('banner-images.edit');
 Route::put('/banner-images/{id}', [BannerController::class, 'update'])->name('banner-images.update');
 Route::delete('/banner-images/{id}', [BannerController::class, 'destroy'])->name('banner-images.destroy');


 // Routes for Services
 Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
 Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
 Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
 Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
 Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
 Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
 Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');



 // Routes for Portfolio
 Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
 Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
 Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
 Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
 Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
 Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
 Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');


 // Routes for Blog
 Route::get('/blog', [BlogController::class, 'index'])->name('blogs.index');
 Route::get('/blog/create', [BlogController::class, 'create'])->name('blogs.create');
 Route::post('/blog', [BlogController::class, 'store'])->name('blogs.store');
 Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogs.show');
 Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
 Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blogs.update');
 Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');


 

 
});
require __DIR__.'/auth.php';

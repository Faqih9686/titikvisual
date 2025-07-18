<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactController;
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

// landingpage
Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/services', [LandingPageController::class, 'services'])->name('services');
Route::get('/portfolios', [LandingPageController::class, 'portfolios'])->name('portfolios');
Route::get('/portfolios/{slug}', [LandingPageController::class, 'portfolioDetail'])->name('portfolio.detail');


// page about/profile
Route::get('/services', [LandingPageController::class, 'services'])->name('services');
Route::get('/services/{slug}', [LandingPageController::class, 'serviceDetail'])->name('service.detail');
Route::get('/about', [LandingPageController::class, 'about'])->name('about.profil');


// portopolio
Route::get('/portofolio', [LandingPageController::class, 'portofolio'])->name('portofolio.index');


// page kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact.konsultasi');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');


//layanan
Route::get('/pagelayanan', [LandingPageController::class, 'layanan'])->name('pagelayanan.layanan');


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


//layanan & detail
Route::get('/pagelayanan', [LandingPageController::class, 'layanan'])->name('pagelayanan.layanan');
Route::get('/page_detaillayanan/{slug}', [LandingPageController::class, 'detaillayanan'])->name('page_detaillayanan.detail');

// Detail layanan 
Route::get('/detail-layanan', function () {
    $testimoni = Testimoni::latest()->take(3)->get();
    return view('page_detaillayanan.detail', compact('testimoni'));
})->name('detail');

// website
Route::get('/web-website', function () {
    $testimoni = Testimoni::latest()->take(3)->get();
    return view('page_website.website', compact('testimoni'));
})->name('web');

// logo
Route::get('/logo-design', function () {
    $testimoni = Testimoni::latest()->take(3)->get();
    return view('page_logo.design', compact('testimoni'));
})->name('logo');

// social
Route::get('/social-media', function () {
    $testimoni = Testimoni::latest()->take(3)->get();
    return view('page_social.social', compact('testimoni'));
})->name('media');

// merchandise
Route::get('/merch-merchandise', function () {
    $testimoni = Testimoni::latest()->take(3)->get();
    return view('page_merchandise.merch', compact('testimoni'));
})->name('merch');

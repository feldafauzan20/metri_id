<?php

use App\Http\Controllers\MetriDesignController;
use App\Http\Controllers\MetriDigitalController;
use App\Http\Controllers\MetriEntertaimentController;
use App\Http\Controllers\MetriEventController;
use App\Http\Controllers\MetriFilmEquipmentController;
use App\Http\Controllers\MetriLandingPageController;
use App\Http\Controllers\MetriPostController;
use App\Http\Controllers\MetriFilmController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectGalleryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutController;

Route::get('/gallery', [ProjectGalleryController::class, 'index'])->name('gallery.index');
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('detail');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/gallery', [ProjectGalleryController::class, 'index'])->name('gallery');

Route::get('/', [MetriLandingPageController::class, 'index']);
Route::get('/metri-entertainment', [MetriEntertaimentController::class, 'index']);
Route::get('/metri-design', [MetriDesignController::class,'index']);
Route::get('/metri-film', [MetriFilmController::class,'index']);
Route::get('/metri-digital', [MetriDigitalController::class, 'index']);
Route::get('/metri-post', [MetriPostController::class, 'index']);
Route::get('/metri-tang-ting', [MetriFilmEquipmentController::class, 'index']);
Route::get('/metri-event', [MetriEventController::class, 'index']);
Route::get('/contact_US', [ContactUsController::class, 'index'])->name('contact_US');
Route::get('/gallery/{service_type}', [ProjectController::class, 'show'])->name('gallery.detail');

Route::get('/detail', function() {
    return view( 'detail');
});

Route::get('/L152GD', function () {
    return redirect('/L152GD');
});

Route::get('/gallery/{service_type}', [ProjectController::class, 'show'])->name('gallery.detail');


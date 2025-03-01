<?php

use App\Http\Controllers\MetriDesignController;
use App\Http\Controllers\MetriDigitalController;
use App\Http\Controllers\MetriEntertaimentController;
use App\Http\Controllers\MetriEventController;
use App\Http\Controllers\MetriFilmEquipmentController;
use App\Http\Controllers\MetriLandingPageController;
use App\Http\Controllers\MetriPostController;
use App\Http\Controllers\MetriFilmController;
use Esign\ConversionsApi\Facades\ConversionsApi;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\UserData;
use App\Http\Controllers\ProjectGalleryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/contact', function () {
    return view('contact');
})->name('contact.form');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');





// Route::get('/test-add-to-cart', function () {
//     $userData = (new UserData())
//         ->setEmail('test@example.com') // Gantilah dengan email user
//         ->setClientIpAddress(request()->ip())
//         ->setClientUserAgent(request()->userAgent());

//     $event = (new Event())
//         ->setEventName('AddToCart')
//         ->setEventTime(time())
//         ->setEventSourceUrl(request()->fullUrl())
//         ->setUserData($userData);

//     ConversionsApi::addEvent($event);
//     ConversionsApi::sendEvents();

//     return response()->json(['message' => 'AddToCart event sent successfully']);
// });



Route::get('/projects-gallery', [ProjectGalleryController::class, 'index']);


Route::get('/design', [MetriDesignController::class, 'index']);


Route::get('/', [MetriLandingPageController::class, 'index']);
Route::get('/metri-entertainment', [MetriEntertaimentController::class, 'index']);
Route::get('/metri-design', [MetriDesignController::class,'index']);
Route::get('/metri-film', [MetriFilmController::class,'index']);
Route::get('/metri-digital', [MetriDigitalController::class, 'index']);
Route::get('/metri-post', [MetriPostController::class, 'index']);
Route::get('/metri-tang-ting', [MetriFilmEquipmentController::class, 'index']);
Route::get('/metri-event', [MetriEventController::class, 'index']);
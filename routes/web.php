<?php

use App\Http\Controllers\MetriDesignController;
use App\Http\Controllers\MetriDigitalController;
use App\Http\Controllers\MetriLandingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Design;
use App\Http\Controllers\MetriFilmController;
use Esign\ConversionsApi\Facades\ConversionsApi;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\UserData;


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



Route::get('/design', [MetriDesignController::class, 'index']);


Route::get('/', [MetriLandingPageController::class, 'index']);
Route::get('/metri-entertainment', function () {
    return view('service-entertainment');
});
Route::get('/metri-design', [MetriDesignController::class,'index']);
Route::get('/metri-film', [MetriFilmController::class,'index']);
Route::get('/metri-digital', [MetriDigitalController::class, 'index']);
Route::get('/metri-post', function () {
    return view('service-post');
});
Route::get('/metri-tang-ting', function () {
    return view('service-tang-ting');
});
Route::get('/metri-event', function () {
    return view('service-event');
});
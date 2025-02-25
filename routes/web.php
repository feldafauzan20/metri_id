<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\MetriLandingPageController;
use Esign\ConversionsApi\Facades\ConversionsApi;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\UserData;


Route::get('/', [MetriLandingPageController::class, 'index']);

Route::get('/design', [DesignController::class, 'index']);

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

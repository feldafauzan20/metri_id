<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string',
            'services' => 'array',
        ]);
    
        $data = $request->all();
    
        // Kirim Email
        Mail::to('hello@metri.id')->send(new ContactMail($data));
    
        // Kirim Event ke Facebook Conversion API
        $this->sendToFacebookCAPI($data);

        // Kirim Event ke Google Analytics 4
        $this->sendToGoogleAnalytics($data);
    
        return back()->with('success', 'Your message has been sent successfully!');
    }

    private function sendToFacebookCAPI($data)
    {
        $accessToken = env('CONVERSIONS_API_ACCESS_TOKEN');
        $pixelId = env('CONVERSIONS_API_PIXEL_ID');
    
        Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://graph.facebook.com/v13.0/{$pixelId}/events", [
            'access_token' => $accessToken,
            'data' => [
                [
                    'event_name' => 'Lead',
                    'event_time' => time(),
                    'user_data' => [
                        'em' => hash('sha256', strtolower($data['email'])),
                        'ph' => hash('sha256', $data['phone'] ?? ''),
                    ],
                    'custom_data' => [
                        'service' => implode(', ', $data['services'] ?? []),
                        'message' => $data['message'],
                    ],
                    'event_source_url' => url()->current(),
                    'action_source' => 'website',
                ],
            ],
        ]);
    }

    private function sendToGoogleAnalytics($data)
    {
        $clientId = session()->getId(); // Ambil client ID dari session
        $measurementId = env('ANALYTICS_PROPERTY_ID');
        $apiSecret = env('GA_API_SECRET');

        Http::post("https://www.google-analytics.com/mp/collect?measurement_id={$measurementId}&api_secret={$apiSecret}", [
            'client_id' => $clientId,
            'events' => [
                [
                    'name' => 'contact_form_submission',
                    'params' => [
                        'email' => $data['email'],
                        'service' => implode(', ', $data['services'] ?? []),
                        'message' => $data['message'],
                    ],
                ],
            ],
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GoogleReviewController extends Controller
{
    public function getReviews()
    {
        // Your Google API key
        $apiKey = 'AIzaSyBqiMW60sG9pVY-eH_Qf2tjB0cd_KXYnOU';
        // The Google Place ID for your business
        $placeId = 'ChIJH-opw7Zl5DoRBeKvRmnbNok';
        
        // Build the API URL
        $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid={$placeId}&key={$apiKey}";
        
        // Make the request to the Google Places API
        $response = Http::get($url);
        
        if ($response->successful()) {
            // Return the response data (reviews) to the frontend
            return response()->json($response->json());
        } else {
            // Handle errors (if any)
            return response()->json(['error' => 'Error fetching reviews'], 500);
        }
    }
}

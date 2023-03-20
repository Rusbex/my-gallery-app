<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GalleryController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.unsplash.com/photos', [
            'client_id' => config('services.unsplash.key'),
            'per_page' => 10,
        ]);

        $photos = $response->json();

        return view('home', [
            'photos' => $photos,
        ]);
    }
}
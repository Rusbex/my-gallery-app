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
            'per_page' => 15,

        ]);

        $photos = $response->json();
//        dd($photos); // добавлено для отладки

        return view('home', [
            'photos' => $photos,
        ]);
    }
    public function about()
    {
        return view('about');
    }
}

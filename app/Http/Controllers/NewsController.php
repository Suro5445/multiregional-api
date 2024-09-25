<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($citySlug)
    {
        $currentCity = City::where('slug', $citySlug)->firstOrFail();
        session(['city_slug' => $citySlug]);

        return view('news', compact('currentCity'));
    }

}

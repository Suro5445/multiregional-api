<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();

        $currentCitySlug = session('city_slug');
        if ($currentCitySlug) {
            return redirect()->route('city.show', $currentCitySlug)->setStatusCode(301);
        }

        return view('cities.index', compact('cities'));
    }

    public function showCity($citySlug)
    {
        $cities = City::all();
        $currentCity = City::where('slug', $citySlug)->firstOrFail();
        session(['city_slug' => $citySlug]);

        return view('cities.show', compact('cities', 'currentCity'));
    }
}

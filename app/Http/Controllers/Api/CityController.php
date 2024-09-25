<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function store(CityRequest $request): \Illuminate\Http\JsonResponse
    {

        $city = City::create($request->validated());

        return response()->json(new CityResource($city), 201);
    }

    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $city = City::find($id);

        if (!$city) {
            return response()->json(['message' => 'City not found'], 404);
        }

        $city->delete();

        return response()->json(['message' => 'City deleted successfully'], 200);
    }
}

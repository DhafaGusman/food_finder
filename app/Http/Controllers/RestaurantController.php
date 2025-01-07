<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $city = $request->query('city', 'Jakarta');
        $restaurants = Restaurant::where('city', $city)->take(8)->get();

        return response()->json($restaurants);
    }
}

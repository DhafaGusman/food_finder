<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/', function () {
    return view('home.home');
});

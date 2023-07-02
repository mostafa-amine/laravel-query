<?php

use App\Models\Country;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Count;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $results = DB::table('countries')
    //     ->selectRaw('countries.id, countries.name ,count(shops.id) as shops_count')
    //     ->join('cities', 'countries.id', '=', 'cities.country_id')
    //     ->join('shops', 'cities.id', '=', 'shops.city_id')
    //     ->groupBy('countries.id')
    //     ->get();

    // All of that we can make it more cleaner with hasManyThrough
    // $results = Country::withCount('shops')
    //     ->where('name', 'like', '%s%')->get();

    // Query the list of shops and list the country for every shop
    $results = Shop::with('city.country')->get();


    return view('welcome', [
        'results' => $results
    ]);
});

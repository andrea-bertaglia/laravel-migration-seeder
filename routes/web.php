<?php

use Carbon\Carbon;
use App\Models\Train;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('trains', function () {
    $trains = Train::where('departure_time', '>=', now())->get();

    // $trains = Train::all();
    return view('trains', compact('trains'));
})->name('trains');

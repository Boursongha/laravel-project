<?php

use App\Http\Controllers\AboutCroller;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\IsClientcontroller;
use App\Http\Controllers\UserCroller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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
    return view('welcome');
});

// Route::get('/user', function () {
//     return "User Page!";
// });

// Route::get('/about', function () {
//     return "User Page About!";
// });

Route::get('/user',[UserCroller::class, 'index']);
Route::get('/about',[AboutCroller::class, 'index']);

Route::get('/client',[ClientController::class, 'index']);
Route::get('/isClient',[IsClientcontroller::class, 'index']);


<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\gmapsController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class, 'index']);
Route::get('/gmaps', [gmapsController::class, 'gmaps']);
Route::get('/about', [aboutController::class, 'about']);
Route::get('/contact', [contactController::class, 'contact']);
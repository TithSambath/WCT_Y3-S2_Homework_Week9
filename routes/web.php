<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [App\Http\Controllers\PagesController::class, 'aboutPage']);
Route::get('/blog', [App\Http\Controllers\PagesController::class, 'blogPage']);
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contactPage']);
Route::get('/portfolio', [App\Http\Controllers\PagesController::class, 'portfolioPage']);
Route::get('/pricing', [App\Http\Controllers\PagesController::class, 'pricingPage']);
Route::get('/services', [App\Http\Controllers\PagesController::class, 'servicesPage']);
Route::get('/team', [App\Http\Controllers\PagesController::class, 'teamPage']);
Route::get('/testimonials', [App\Http\Controllers\PagesController::class, 'testimonialsPage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

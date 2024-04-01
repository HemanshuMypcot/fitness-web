<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
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

// Home Page
Route::get("/",[HomeController::class,'fetchAndDisplayContact']);

// Contact Page
Route::get("contact_us",[ContactController::class,'fetchAndDisplayContact']);
Route::post('contact_us', [ContactController::class,'storeContactForm'])->name('contact_us');

// Privacy Page
Route::get('privacy', [PrivacyController::class, 'fetchAndDisplayPrivacy']);
// Route::get('privacy',[PrivacyController::class,'index']);

// Terms Page
Route::get('terms', [TermsController::class, 'fetchAndDisplayTerms']);
// Route::get('terms',[TermsController::class,'index']);

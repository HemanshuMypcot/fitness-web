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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','frontend/home');
Route::view('contact_us','frontend/contact');
Route::view('faq','frontend/faq');
Route::view('privacy','frontend/privacy');
Route::view('terms','frontend/terms');
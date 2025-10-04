<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/contactos', [ContactController::class, 'show'])->name('contact.form');
Route::post('/contactos', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', function () {
    return view('contact');
});


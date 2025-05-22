<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Contact form submission (POST)
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Services page
Route::get('/services', function () {
    return view('services'); // Ensure you have a 'services.blade.php' file in 'resources/views'
})->name('services');

// Contact page (GET)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Home page
Route::get('/', function () {
    return view('welcome');
});
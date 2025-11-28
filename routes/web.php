<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VolunteerController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/donate', [HomeController::class,'donate'])->name('donate');
Route::get('/about', [HomeController::class,'aboutus'])->name('about');
Route::get('/programs', [HomeController::class,'program'])->name('program');
Route::get('/testimonial', [HomeController::class,'testimonial'])->name('testimonial');
Route::get('/impact', [HomeController::class,'impact'])->name('impact');
Route::post('/volunteer/submit', [VolunteerController::class, 'store'])->name('volunteer.submit');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/getinvolved', [HomeController::class, 'involved'])->name('getinvolved');
Route::get('/transparency', [HomeController::class, 'transparency'])->name('transparency');

Route::get('/contacts', [ContactController::class, 'show'])->name('contact');
Route::post('/contacts', [ContactController::class, 'submit'])->name('contact.submit');


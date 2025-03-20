<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PagesController::class,'index'])
->name('home');

Route::get('/aboutus',[PagesController::class,'aboutus'])
->name('aboutus');

Route::get('/favourites',[PagesController::class,'favourites'])
->name('favourites');

Route::get('/recently',[PagesController::class,'recently'])
->name('recently');

Route::get('/signup',[PagesController::class,'signup'])
->name('signup');

Route::get('/signuphotel',[PagesController::class,'signuphotel'])
->name('signuphotel');

Route::get('/hoteldetails',[PagesController::class,'hoteldetails'])
->name('hoteldetails');
 
Route::get('/login',[PagesController::class,'login'])
->name('login');


Route::get('/roomdetails',[PagesController::class,'roomdetails'])
->name('roomdetails');

Route::get('/bookingform',[PagesController::class,'bookingform'])
->name('bookingform');

Route::get('/exploremore',[PagesController::class,'exploremore'])
->name('exploremore');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    //hotelmanagement
    Route::get('/hotelmanagement',[HotelController::class,'index'])
    ->name('hotelmanagement.index');

    Route::get('/hotelmanagement/create',[HotelController::class,'create'])
    ->name('hotelmanagement.create');

    Route::get('/hotelmanagement/edit',[HotelController::class,'edit'])
    ->name('hotelmanagement.edit');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

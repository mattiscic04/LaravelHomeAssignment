<?php

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
    return view('welcome');
});

Route::get('/cars', function(){
    return view('cars.index');
})->name('cars.index');

Route::get('/cars/create', function(){
    return view('cars.create');
})->name('cars.create');

Route::get('/cars/{id}', function($id){
    $car = App\Models\Car::find($id);
    return view('cars.show', compact('car'));
})->name('cars.show');


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
    return "<h1>All cars</h1>";
})->name('cars.index');

Route::get('/cars/create', function(){
    return "<h1>Add new car</h1>";
})->name('cars.create');

Route::get('/cars/{id}', function($id){
    return App\Models\Car::find($id);
})->name('cars.show');


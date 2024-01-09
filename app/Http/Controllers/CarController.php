<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacture;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $manufacturers = Manufacture::orderBy('name')->pluck('name', 'id');
        return view('cars.index', compact('cars', 'manufacturers'));

    }
    public function create()
    {
        return view('cars.create');
    }
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }
}

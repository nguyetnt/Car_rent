<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all cars from database
        $cars = Car::all();

        // Return view with cars 
        return view('carsAdmin', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('carsAdminCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Add car to database
        $car = new Car();

        $car->car_model = $request->car_model;
        $car->car_number = $request->car_number;
        $car->car_price = $request->car_price;
        $car->car_status = "Chua thue";
        $car->img_url = $request->img_url;

        $car->save();

        return redirect('/carsAdmin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $car = Car::find($id);

        return view('cardetail', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->has('search') && !empty($request->search)) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('company', 'like', '%' . $request->search . '%');
        }

        $cars = $query->paginate(10);

        return view('cars.index', compact('cars'));
    }

    
    public function create()
    {
        return view('cars.create');

    }

    
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            'name' => ['required','min:3'],
            'color' => 'required',
            'company' => 'required'
        ]);

    

        Car::create($validatedData);

        return redirect()->route('cars.index')->with('success', 'Car created successfully!');
    }

    
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));

    }

    
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }


    public function update(Request $request, Car $car)
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'color' => 'required',
            'company' => 'required'
        ]);

    

        $car->update($validatedData);
 
        return redirect()->route('cars.index')->with('success', 'Car updated successfully!');
      }


    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully!');
    }
}

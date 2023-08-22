<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function index()
    {
        $trips = Trip::all();

        return view('index', compact('trips'));
    }

    public function indexUsers()
    {
        $trips = Trip::all();

        return view('indexUsers', compact('trips'));
    }

    public function app(Request $request)
    {
        $query = Trip::query();

            if ($request->has('s')) {
            $searchTerm = $request->input('s');
            $query->where(function ($innerQuery) use ($searchTerm) {
            $innerQuery->where('place', 'LIKE', '%' . $searchTerm . '%')
                       ->orWhere('country', 'LIKE', '%' . $searchTerm . '%');
            });
    }

        $trips = $query->paginate(8);

        return view('index', compact('trips'));
}

 public function create()
    {
        return view('create');
    }

    public function edit()
    {
        return view('edit');
    }

    public function store(Request $request)
{
    dd($request->all()); 

    $validatedData = $request->validate([
        'place' => 'required|string|max:255',
        'country' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'required|string',
    ]);

    $imagenPath = $request->file('imagen')->store('public');

    $trip = new Trip();
    $trip->place = $validatedData['place'];
    $trip->country = $validatedData['country'];
    $trip->image = $imagenPath;
    $trip->description = $validatedData['description'];
    $trip->save();

    return view('data_saved');
}

}
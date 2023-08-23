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

    public function show($id)
    {
        $trip = Trip::findOrFail($id);
        return view('show', ['trip' => $trip]);
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

    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect()->route('indexUsers');
    }



// ...

public function store(Request $request)
{
    $place = $request->input('place');
    $country = $request->input('country');
    $image = $request->file('imagen');
    $description = $request->input('description');


    if ($image) {
        $imagePath = $image->store('image', 'public');
    } else {
        $imagePath = null;
    }

    $trip = new Trip();
    $trip->place = $place;
    $trip->country = $country;
    $trip->image = $imagePath;
    $trip->description = $description;

    $trip->save();

    return redirect()->route('indexUsers');
}

}


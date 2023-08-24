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

    // public function indexUsers()
    // {
    //     $trips = Trip::all();

    //     return view('indexUsers', compact('trips'));
    // }

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

    // public function edit(Trip $trip)
    // {

    //     return view('edit', compact('trip'));
    // }

    // public function update(Request $request, Trip $trip)
    // {

    //     $trip->place = $request->input('place');
    //     $trip->country = $request->input('country');
    //     $trip->image = $request->input('image');
    //     $trip->description = $request->input('description');

    //     $trip->save();

    //     return redirect()->route('show', $trip);
    // }

    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect()->route('indexUsers');
    }


    public function store(Request $request)
    {
        //$imagenPath = $request->file('imagen')->store('public');

        $trip = new Trip();
        $trip->place = $request->input('place');
        $trip->country = $request->input('country');
        $trip->image = $request->input('image');
        $trip->description = $request->input('description');

        $trip->save();

        return redirect()->route('indexUsers');
    }
}

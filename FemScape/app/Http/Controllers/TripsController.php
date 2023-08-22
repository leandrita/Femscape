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

    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect()->route('indexUsers');
    }
}

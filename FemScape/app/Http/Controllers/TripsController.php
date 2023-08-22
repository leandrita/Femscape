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
}


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
}

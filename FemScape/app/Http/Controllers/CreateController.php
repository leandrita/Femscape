<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('create');
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

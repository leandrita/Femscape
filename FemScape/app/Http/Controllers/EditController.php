<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(Trip $trip)
    {

        return view('edit', compact('trip'));
    }

    public function update(Request $request, Trip $trip)
    {

        $trip->place = $request->input('place');
        $trip->country = $request->input('country');
        $trip->image = $request->input('image');
        $trip->description = $request->input('description');

        $trip->save();

        return redirect()->route('show', $trip);
    }
}

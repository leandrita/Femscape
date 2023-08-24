<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alert extends Controller
{
    public function store(Request $request)
    {
    

        if ($destinoCreado) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }


}

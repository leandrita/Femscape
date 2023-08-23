<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class IndexUsersController extends Controller
{
    public function indexUsers()
    {
         $trips = Trip::all();

         return view('indexUsers', compact('trips'));
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        return view('indexUsers');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingsController extends Controller
{
    public function index()
    {
        return view('buildings.index');
    }

    public function show()
    {
        return view('buildings.show');
    }
}

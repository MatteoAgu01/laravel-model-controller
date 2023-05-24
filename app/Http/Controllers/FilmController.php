<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;
class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('home', compact('films'));
    }
}

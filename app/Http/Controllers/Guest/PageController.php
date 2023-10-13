<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        return view('film', compact('movies'));
    }

    // public function store()
    // {
    //     $dati = request()->all();

    //     $newMovie = new Movie();

    //     $newMovie->title = $dati["title"];
    //     $newMovie->original_title = $dati["original_title"];
    //     $newMovie->nationality = $dati["nationality"];
    //     $newMovie->date = $dati["date"];
    //     $newMovie->vote = $dati["vote"];
    //     $newMovie->id = "IO";

    //     $newMovie->save();
    // }
}
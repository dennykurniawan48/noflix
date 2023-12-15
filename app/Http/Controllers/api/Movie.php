<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie as ModelsMovie;
use Illuminate\Http\Request;

class Movie extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = array();
        $recomendation = ModelsMovie::select('id', 'title', 'thumbnail', 'release_year')->inRandomOrder(10)->get();
        $movies[] = ['genre' => 'recomendation', 'data' => $recomendation];
        $genres = Category::all();

        foreach($genres as $genre){
            $moviesByGenre = ModelsMovie::select('id', 'title', 'thumbnail', 'release_year')->where('ref_category', '=', $genre->id)->get();
            $movies[] = ['genre' => $genre['category_name'], 'data' => $moviesByGenre];
        }

        return response()->json(["movies" => $movies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ModelsMovie::where('slug', '=', $id)->firstOrFail();
        return response()->json(["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

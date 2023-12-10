<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use stdClass;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $recomendation = Movie::inRandomOrder()->limit(10)->get(); 
        $movieByCategory = array();

        foreach($categories as $category){
            $movie = new stdClass();
            $movie->category_name = $category->category_name;
            $movie->movies = Movie::where('ref_category', '=', $category->id)->inRandomOrder()->limit(10)->get();
            $movieByCategory[] = $movie;
        }

        return view('home/index', [
            "categories" => $categories,
            "recomendations" => $recomendation,
            "movies" => $movieByCategory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $recomendation = Movie::inRandomOrder()->limit(10)->get(); 
        $movie = Movie::findOrFail($id);
        return view('home.movie',[
            "movie" => $movie,
            "recomendations" => $recomendation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

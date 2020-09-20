<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function showOne ($id) {

        $movie = Movie::find($id);

        return (string) $movie;
    }
    
    public function showAll () {
        $movies = Movie::all();

        return $movies->toArray();
    }
    
    public function create (Request $request) {
        $request->validate([
            'title' => ['required'],
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1)
        ]);

        $movie = Movie::create($request->all());

        return $movie;
    }

    public function update (Request $request, $id) {
        $movie = Movie::findOrFail($id);
        $request->validate([
            'title' => ['required'],
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1)
        ]);
        $movie->update($request->all());

        return $movie;
    }

    public function delete ($id) {
        Movie::find($id)->delete();

        return 204;
    }
}
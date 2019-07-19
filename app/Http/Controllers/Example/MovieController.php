<?php

namespace App\Http\Controllers\Example;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Example\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return response()->json($movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie;       
        $movie->name        = $request->name;
        $movie->year        = $request->year;
        $movie->description = $request->description;
        $movie->duration    = $request->duration;
        $movie->genre       = $request->genre;
        $movie->save();

        return response()->json(['message' => 'Los datos se almacenarón correctamente'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);       
        $movie->name        = $request->name;
        $movie->year        = $request->year;
        $movie->description = $request->description;
        $movie->duration    = $request->duration;
        $movie->genre       = $request->genre;
        $movie->save();

        return response()->json(['message' => 'Los datos se actualizarón correctamente'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return response()->json(['message' => 'La película se eliminó con éxito']);
    }
}

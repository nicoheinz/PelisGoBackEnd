<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieStoreRequest;
use App\Http\Requests\MovieUpdateRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Movie::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\MovieStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieStoreRequest $request)
    {   
        $data = $request->validated();

        $movie = Movie::create([
            'tittle' => $request->tittle,
            'gender' => $request->gender,
            'actor' => $request->actor,
            'director' => $request->director,
            'qualification' => $request->qualification,
            'url_img' => $request->url_img,
            'url_trailer' => $request->url_trailer,
            'url_video' => $request->url_video,
            'quality' => $request->quality,
            'duration' => $request->duration,
            'year' => $request->year,
            'comments' => $request->comments
        ]);     
        
        $movie->save();
        
        return ["code" => "200", "message" =>"success", "data" =>$movie];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return $movie;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\MovieUpdateRequest  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieUpdateRequest $request, Movie $movie)
    {   
        $movie->update([
            'tittle' => $request->tittle,
            'gender' => $request->gender,
            'actor' => $request->actor,
            'director' => $request->director,
            'qualification' => $request->qualification,
            'url_img' => $request->url_img,
            'url_trailer' => $request->url_trailer,
            'url_video' => $request->url_video,
            'quality' => $request->quality,
            'duration' => $request->duration,
            'year' => $request->year,
            'comments' => $request->comments
        ]);
        
        $movie->save();

        return ["code" => "200", "message" => "Actualizado", "data" => $movie];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return ["code" => "200", "meesage" => "Eliminado"];
    }
}

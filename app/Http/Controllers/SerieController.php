<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SerieStoreRequest;
use App\Http\Requests\SerieUpdateRequest;
use DB;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        return Serie::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SerieStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SerieStoreRequest $request)
    {
        $data = $request->validated();

        $serie = Serie::create([
            'tittle'=> $request->tittle,
            'gender'=> $request->gender,
            'actor'=> $request->actor,
            'director'=> $request->director,
            'qualification'=> $request->qualification,
            'url_img'=> $request->url_img,
            'url_trailer'=> $request->url_trailer,
            'url_video'=> $request->url_video,
            'quality'=> $request->quality,
            'year' => $request->year,
            'comments' => $request->comments
        ]);

        $serie->save();

        return ["code" => "200", "message" =>"success", "data" =>$serie];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {  
        return $serie;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\SerieUpdateRequest   $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(SerieUpdateRequest $request, Serie $serie)
    {
        $serie->update([
            'tittle'=> $request->tittle,
            'gender'=> $request->gender,
            'actor'=> $request->actor,
            'director'=> $request->director,
            'qualification'=> $request->qualification,
            'url_img'=> $request->url_img,
            'url_trailer'=> $request->url_trailer,
            'url_video'=> $request->url_video,
            'quality'=> $request->quality,
            'year' => $request->year,
            'comments' => $request->comments
        ]);
        
        $serie->save();

        return ["code" => "200", "message" => "Actualizado", "data" => $serie];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        $serie->delete();

        return ["code" => "200", "meesage" => "Eliminado"];
    }
}

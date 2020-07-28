<?php

namespace App\Http\Controllers;

use App\Season;
use App\Serie;

use Illuminate\Http\Request;
use App\Http\Requests\SeasonStoreRequest;
use App\Http\Requests\SeasonUpdateRequest;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Serie $serie)
    {
        return $serie->seasons()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SeasonStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeasonStoreRequest $request, Serie $serie)
    {
        $data = $request->validated();

        $season = Season::create([
            'serie_id' => $serie->id,
            'tittle' => $request->tittle
        ]);     
        
        $season->save();

        return ["code" => "200", "message" =>"success", "data" =>$season];
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie, Season $season)
    {
        return $season;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\SeasonUpdateRequest  $request
     * @param  \App\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(SeasonUpdateRequest $request, Serie $serie, Season $season)
    {
        $data = $request->validated();

        $season->update([
            'serie_id' => $serie->id,
            'tittle' => $request->tittle
        ]);     
        
        $season->save();

        return ["code" => "200", "message" => "Actualizado", "data" => $season];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie, Season $season)
    {
        $season->delete();
        
        return ["code" => "200", "meesage" => "Eliminado"];
    }
}

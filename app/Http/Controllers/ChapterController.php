<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Season;

use Illuminate\Http\Request;
use App\Http\Requests\ChapterStoreRequest;
use App\Http\Requests\ChapterUpdateRequest;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Season $season)
    {   
        return Chapter::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ChapterStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChapterStoreRequest $request, Season $season)
    {
        $data = $request->validated();

        $chapter = Chapter::create([
            'season_id' => $season->id,
            'url_img' => $request->url_img,
            'tittle' => $request->tittle,
            'url_chapter' => $request->url_chapter,
            'time' => $request->time
        ]);     
        
        $chapter->save();

        return ["code" => "200", "message" =>"success", "data" =>$chapter];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Season $season, Chapter $chapter)
    {
        return $chapter;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ChapterUpdateRequest  $request
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(ChapterUpdateRequest $request, Season $season, Chapter $chapter)
    {   
        $data = $request->validated();

        $chapter = $chapter->update([
            'season_id' => $season->id,
            'tittle' => $request->tittle,
            'url_img' => $request->url_img,
            'url_chapter' => $request->url_chapter,
            'time' => $request->time
        ]);     

        return ["code" => "200", "message" => "Actualizado", "data" => $chapter];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Season $season, Chapter $chapter)
    {
        $chapter->delete();
        
        return ["code" => "200", "meesage" => "Eliminado"];
    }
}

<?php

namespace App\Http\Controllers;

use App\countries;
use App\Tournament;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countryLists=countries::all();
        $tournaments=Tournament::all();
        return view('welcome', compact('countryLists','tournaments'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($tournament)
    // {
    //     // $tournament=Tournament::find($id);
    //     // $tournament=Tournament::where('slug',$tournament);
    //     $tournament=DB::table('Tournaments')->where('slug',$tournament)->first();
    //     $matchs=DB::table('matchs')->where('tournament_id',$tournament->id)->get();
    //     // dd($matchs);
    //     // dd($tournament);
    //     return view('tournament-detail', compact(['tournament', 'matchs']));
    // }
    public function show(Tournament $tournament)
    {
        // dd($tournament->get());
        // dd($tournament);
        return view('tournament-detail', compact('tournament'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

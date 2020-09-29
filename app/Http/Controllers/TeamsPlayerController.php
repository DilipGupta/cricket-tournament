<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsPlayerController extends Controller
{
    public function show($id)
    {
        return view('player-detail', compact('id'));
    }
}

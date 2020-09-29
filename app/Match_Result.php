<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match_Result extends Model
{
    protected $fillable=['match_id','first_team_runs'];
    
    public function match()
    {
        return $this->belongsTo(fight::class,'match_id');
    }

    public function getFirstTeamRunsAttribute()
    {
        dd('hi');
        return $this->first_team_runs;
    }
}

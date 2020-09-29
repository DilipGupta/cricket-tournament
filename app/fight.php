<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    protected $fillable=['type'];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function setTypeAttribute($value)
    {
        $this->attributes['type']=$value;
        $this->attributes['slug']=Str::slug($value);
    }

    public function match_result()
    {
        // dd('hi');
        return $this->hasOne(match_result::class);
    }

    public function first_team()
    {
        return $this->belongsTo(team::class,'matchs_first_team_id');
    }

    public function second_team()
    {
        return $this->belongsTo(team::class,'matchs_second_team_id');
    }
    

}

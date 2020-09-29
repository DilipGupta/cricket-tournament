<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // public function match()
    // {
    //     return $this->belongsToMany(fight::class);
    // }

    public function match()
    {
        return $this->belongsToMany(fight::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name']=$value;
        $this->attributes['slug']=Str::slug($value);
    }

    public function getFirstTeamNameAttribute()
    {
        return $this->name;
    }

    public function getSecondTeamNameAttribute()
    {
        return $this->name;
    }
}

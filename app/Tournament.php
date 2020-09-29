<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable=['name'];
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function match()
    {
        return $this->hasMany(Fight::class);
    }

    public function team()
    {
        return $this->hasMany(Team::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name']=$value;
        $this->attributes['slug']=Str::slug($value);
    }

    // public function team()
    // {
    //     return $this->hasMany(fight::class);
    // }

    // public function getTeamNameAttribute()
    // {
    //     return $this->
    // }
}

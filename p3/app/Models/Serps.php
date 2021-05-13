<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\serp;

class Serps extends Model
{
    use HasFactory;
}

function users()
{
    return $this->belongsToMany('App\Models\User')
        ->withTimestamps() # Must be added to have Eloquent update the created_at/updated_at columns in a pibot table
        ->withPivot('notes'); # Must also specify any other fields that should be included when fetching this relationship
}


function serps()
{
    return $this->belongsToMany('App\Models\Serps')
        ->withTimestamps() # Must be added to have Eloquent update the created_at/updated_at columns in a pibot table
        ->withPivot('notes'); # Must also specify any other fields that should be included when fetching this relationship
}

namespace Url;

class url
{
    public function findbyUrl($url)
    {
        return self::where('url', '=')->first();
    }
}

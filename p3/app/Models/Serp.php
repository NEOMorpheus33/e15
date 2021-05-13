<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serp extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany('App\Models\User')
        ->withTimestamps() # Must be added to have Eloquent update the created_at/updated_at columns in a pibot table
        ->withPivot('notes'); # Must also specify any other fields that should be included when fetching this relationship
    }


    public function serps()
    {
        return $this->belongsToMany('App\Models\Serps')
        ->withTimestamps() # Must be added to have Eloquent update the created_at/updated_at columns in a pibot table
        ->withPivot('notes'); # Must also specify any other fields that should be included when fetching this relationship
    }
}
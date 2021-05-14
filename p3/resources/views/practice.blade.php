<?php
namespace App\Http\Controllers;
use App\Models\Serp;
use App\Models\User

@extends('layouts/main')
@section('content')

<h1>JSearch Site Practice P3 APP Project</h1>

public function practiceX()
{
# Eager load users to reduce number of queries
# (Suggestion: Try this without the `with` and watch how it greatly increases the number of queries)
$serps = Serp::with('users')->get();

foreach ($search as $user) {
if ($search->users->count() == 0) {
dump($search->title . ' is not on any user’s list');
} else {
dump($book->title . ' is on the following user’s lists:');

foreach ($book->users as $user) {
dump($user->email);

ul>
<li><strong>Title:</strong> {{ $search->title }}
<li><strong>Time:</strong> {{ $search->created_at }}
<li><strong>Description:</strong> {{ $search->description }}
<li><strong>Body:</strong> <em>{{ substr($search->body, 0, 300) }}...</em>
    </ul>
    }
    }
    }
    }


    @endsection

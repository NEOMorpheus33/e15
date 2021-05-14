@extends('layouts/main')
@section('content')

use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Connection;
use Illuminate::db;
use Illuminate\Support\Facades\URL;

<h2>History of Searches</h2>
@foreach($searches as $search)

<ul>
    <li><strong>Title:</strong> {{ $search->title }}
    <li><strong>Time:</strong> {{ $search->created_at }}
    <li><strong>Description:</strong> {{ $search->description }}
    <li><strong>Body:</strong> {{ substr($search->body, 0, 300) }}
    <li><strong>URL:</strong> {{ $search->url }}
</ul>

Serp::delete($id); Delete search
@endforeach
@endsection

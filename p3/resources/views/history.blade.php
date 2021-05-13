@extends('layouts/main')

@section('content')

<h2>History of Searches</h2>
@foreach($searches as $search)

<ul>
    <li><strong>Title:</strong> {{ $search->title }}
    <li><strong>Time:</strong> {{ $search->created_at }}
    <li><strong>Description:</strong> {{ $search->description }}
    <li><strong>Body:</strong> <em>{{ substr($search->body, 0, 300) }}...</em>
</ul>


@endforeach

@endsection

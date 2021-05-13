@extends('layouts/main')

@section('content')

<form action="/search" method="GET">

    <label for='keywords'>Keywords:</label>
    <input type='text' id='keywords' name='keywords'>
    <button type='submit'>Search</button>

</form>

@if($serps)
<h2>Search Results</h2>
<ul>
    <li><strong>Title:</strong> {{ $serps->title }}
    <li><strong>Description:</strong> {{ $serps->description }}
    <li><strong>Body:</strong> <em>{{ substr($serps->body, 0, 1000) }}...</em>
</ul>
@endif

@endsection

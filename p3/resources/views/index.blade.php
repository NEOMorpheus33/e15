<!Doctype HTML>
@extends('layouts/main')
@section('content') <form action="/search" method="GET">

    <label for='keywords'>Keywords:</label>
    <input type='text' id='keywords' name='keywords'>
    <button type='submit'>Search</button>

</form>

<!-- serps variable action echo blade list -->

@if($serps)
<h2>Search Results</h2>
<ul>
    <li><strong>Title:</strong> {{ $serps->title }}</strong></li>
    <li><strong>Description:</strong> {{ $serps->description }}</strong></li>
    <li><strong>Body:</strong> {{ substr($serps->body, 0, 1000) }}</strong></li>
    <!-- <li><strong>Body:</strong> <em> $url  -->
</ul>

@endif


@endsection
</HTML>

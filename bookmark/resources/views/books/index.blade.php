@extends('layouts/main')

@section('title')
All Sites
@endsection

@section('head')
<link href='style.css' rel='stylesheet'>
@endsection

@section('content')

<h1>All Sites</h1>

@if(count($sites) == 0)
No sites have been added yet.
@else
<div id='newSites'>
    <h2>New Sites</h2>
    <ul class='clean-list'>
        @foreach($newSitess as $sites)
        <li><a href='/sites/{{ $sites->slug }}'>{{ $sites->title }}</a></li>
        @endforeach
    </ul>
</div>

<div id='sites'>
    @foreach($books as $book)
    <a class='sites' href='/sites/{{ $book->url }}'>
        <h3>{{ $sites->title }}</h3>
        <img class='sites' src='{{ $sites->cover_url }}'>
    </a>
    @endforeach
</div>
@endif

@endsection

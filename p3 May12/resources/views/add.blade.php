@extends('layouts/main')
@section('Search')
Add {{ $sites->title }} to your list
@endsection

@section('content')
<h1>Add to your site list</h1>
<h2>{{ $site->title }}</h2>

<form method='POST' action='/list/ {{ $site->url }}/save'>
    <div class='details'>* Required fields</div>
    {{ csrf_field() }}

    <label for='sites'>YourSites Added</label>
    <textarea name='sites' dusk='ducksites'>{{ old('sites') }}</textarea>

    <button class='btn btn-primary'>Sites Added</button>
</form>

@endsection

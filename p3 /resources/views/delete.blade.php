@extends('layouts/main')

@section('head')
<link href='/css/sites/delete.css' rel='stylesheet'>
@endsection

@section('title')
Confirm deletion: {{ $sites->title }} 
@endsection 

@section('content') 

<h1>Confirm deletion</h1>

<p>Are you sure you want to delete <strong>{{ $sites->title }}</strong>?</p>

<form method='POST' action='/sites/{{ $sites->url }}'>
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <button type='submit' class='btn btn-danger btn-small'>Yes, delete it!</button>
</form>

<p class='cancel'>
    <a href='/sites/{{ $sites->url }}'>No, I changed my mind.</a>
</p> 

@endsection

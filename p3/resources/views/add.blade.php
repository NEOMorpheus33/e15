@extends('layouts/main')  

@section('title') 
    Add {{ $site->title }} to your list
@endsection

@section('content') 
    <h1>Add to your site list</h1>
    <h2>{{ $site->title }}</h2>

    <form method='POST' action='/list/{{ $site->url }}/save'> 
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}

        <label for='notes'>YOUR NOTES THE SITE</label> 
        <textarea name='notes'>{{ old('notes') }}</textarea>

        <button class='btn btn-primary'>Add</button> 
    </form>  

    @endsection 
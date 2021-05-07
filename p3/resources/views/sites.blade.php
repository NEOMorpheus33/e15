@extends('layouts/main')  

@section('title') 
Your Site List  


@section('content')

@if($sites->count() == 0)
<p>You have not added any sites to your list yet.</p>
<p><a href='/sites'>Find sites to add in our Search Engine...</a></p> 
@else 

@foreach($sites as $site)
<div class='site'> 
    <a href='/sites/{{ $sites->url}}'> 
        <h2>{{ $site->title }}</h2> 
    </a> 

    @if($site->author) 
    <p>By {{ $site->author->first_name. ' ' . $site->author->last_name }}</p> 
    @endif 

    {{-- In the following two paragraphs, observe how `$site->pivot` is used to access 
    details (`created_at` and `notes`) from the book to user relationship --}}
    <p class='notes'>
        {{ $site->pivot->notes }} 
    </p>

    <p class='added'>
        Added {{ $site->pivot->created_at->diffForHumans() }}
    </p> 
</div> 
@endforeach  

@endif

@endsection

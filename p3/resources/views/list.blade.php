@extends('layouts/main')       
@section('title') 

Your Site List:   

@endsection
@section('content') 

@if($serps->count() == 0) 

<p>You have not added any books to your list yet.</p>
<p><a href='/sites'>Find books to add in our library...</a></p>

@else 

@foreach($sites as $site)
<div class='site'> 
    <a href='/site/{{ $site->url }}'>
        <h2>{{ $site->title }}</h2> 
    </a>

    @if($site->site)
    <p>By {{ $site->author->first_name. ' ' . $site->author->last_name }}</p>
    @endif 

    {{-- In the following two paragraphs, observe how `$book->pivot` is used to access 
    details (`created_at` and `notes`) from the site to user relationship --}}
    
    <p class='notes'>  
        {{ $site->pivot->notes }} 
    </p> 

    <p class='added'>
        Added {{ $serp->pivot->created_at->diffForHumans() }}
    </p>
</div> 

<a class='btn btn-primary' href='/list/{{ $site->url }}/add'>Add site to your list</a>   
@endforeach  
@endif 
@endsection 

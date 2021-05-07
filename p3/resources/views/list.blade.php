<?php

@extends('layouts/main')       
@section('title') 

Your Site List:   

@section('content') 

@if($sites->count() == 0) 

<p>You have not added any books to your list yet.</p>
<p><a href='/sites'>Find books to add in our library...</a></p>

@else 

@foreach($sites as $sites)
<div class='sites'> 
    <a href='/sites/{{ $site->url }}'>
        <h2>{{ $sites->title }}</h2> 
    </a>

    @if($sites->url)
    <p>By {{ $sites->url-> ' ' . $sites->url }}</p>
    @endif 

   //{{-- In the following two paragraphs, observe how `$book->pivot` is used to access 
   // details (`created_at` and `notes`) from the site to user relationship --}}
    
    <p class='notes'>  
        {{ $sites->pivot->notes }} 
    </p> 

    <p class='added'>
        Added {{ $serps->pivot->created_at->diffForHumans() }}
    </p>
</div> 

<a class='btn btn-primary' href='/list/{{ $sites->url, $sites->title, $sites->description,$sites,sitemapxml }}/add'>Add sites to your list</a>   
@endforeach  
@endif 
@endsection  

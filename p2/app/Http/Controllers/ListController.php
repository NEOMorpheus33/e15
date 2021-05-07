Namespace App\https\controllers;     
ListController exends controller;    
Use Illuminate\http\Request;    
use resources/views/list/list.blade.php 
Route::get('/list', [ListController::class, 'list']); 

Class ListController extends Controller 
{ 
    { 
Public function show(Request $request);   

    $serps = return view('list/show');  
    dd('books');, ['books' $books =>];   

$request->user()->serps;  
    } 
} 

@extends('layouts/main')

@section('title')
Your List
@endsection 

@section('content') 

@if($s->count() == 0)  
<p>You have not added any sites to your list yet.</p>
<p><a href='/sites'>Find sites to add in our library...</a></p>
@else 

@foreach($serps as $serps) 
<div class='serp'>
    <a href='/serps/{{ $serps->slug }}'>
        <h2>{{ $serp->title }}</h2>
    </a> 

    @if($serp->site)  
    <p>By {{ $serp->author->first_name. ' ' . $serp->author->last_name }}</p>
    @endif  

{{-- In the following two paragraphs, observe how `$serp->pivot` is used to access 
details (`created_at` and `notes`) from the book to user relationship --}}
<p class='notes'> 
        {{ $serp->pivot->notes }} 
    </p>

    <p class='added'> 
        Added {{ $serp->pivot->created_at->diffForHumans() }}
    </p> 
</div>
@endforeach 

@endif 

@endsection 









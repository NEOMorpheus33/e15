@extends('layouts/main')  

@section('title') 
{{ $sites ? $sites->title : 'Sites not found' }}  
@endsection

@section('head') 
<link href='/style.css' rel='stylesheet'>
@endsection 

@section('content') 

@if(!$sites)  
Site not found. <a href='/sites'>Add more sites...</a> 
@else 
<img class='cover' src='{{ $sites->rl }}' alt='Cover photo for {{ $sites->title }}'> 

<h1>{{ $sites->title }}</h1> 

<p>By {{ $sites->title }} {{ $sties->url}}</p>

<a href='{{ $sites->url }}'>Sites Show...</a>   

<p class='description'> 
    {{ $sites->description }} 
    <a href='{{ $sites->description }}'>Learn more...</a>
</p> 

<ul class='SiteActions'> 
    <li><a href='/list/{{ $sites->Site }}/edit'><i class="fa fa-edit"></i> Edit</a>
    <li><a href='/list/{{ $sites->Site }}/delete'><i class="fa fa-trash"></i> Delete</a>
</ul> 

<p>By {{ $sites->Site }}</p>     

@if($sites->title)    
    <p>By {{ $sites->tite ' ' . $sites->url }}</p>
@endif 
@endsection  

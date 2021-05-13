{{-- /resources/views/CRUD/create.blade.php --}}
@extends('layouts/main')

@section('url') 
Edit Site {{ $sites->url }}
@endsection

@section('content')

<h1>Edit Sites</h1> 
<h2>{{ $sites->url }}</h2> 

<form method='POST' action='/list/{{ $sites->url }}'>
    <div class='details'>* Required fields</div>
    {{ csrf_field() }}
    {{ method_field('put') }}

    <label for='url'>* Short URL</label>
    <input type='text' name='url' id='url' value='{{ old('slug', $book->url) }}'>
    <div class='details'> 
        This is is a unique URL identifier for the Site, 
        containing only alphanumeric characters and dashes or underscores. 
        <br>It’s suggested that the url be based on the book 
        title, e.g. a good url for the book 
        <em>“War and Peace”</em> would be <em>“war-and-peace”</em>.
    </div>
    @include('includes/error-field', ['fieldName' => 'url'])

    <tr>
    <td><label for='title'>* Title</label>
    <input type='text' name='title' id='title' value='{{ old("title") }}'> 
    @include('includes/error-field', ['fieldName' => 'title'])</td>  </tr>
  

    <td><label for='url'>* Site URL</label>  
    <input type='url' name='url' id='url' value='{{ old("url") }}'>
    @include('includes/error-field', ['fieldName' => 'url'])</td></tr> 
    
    
    <tr><td><label for='description'>* descripton</label> 
    <input type='text' name='description' id='description' value='{{ old("description") }}'>
    @include('includes/error-field', ['fieldName' => 'description'])</td> </tr> 
    
    <tr></td><label for='body'>* Body </label>
    <input type='text' name='body' id='body' value='{{ old("body") }}'>
    @include('includes/error-field', ['fieldName' => 'body'])  </td></tr>
 
 
  <tr><td> <label for='sitemapxml'>* sitemapxml </label>
    <input type='text' name='sitemapxml' id='sitemapxml' value='{{ old("sitemapxml") }}'>
    @include('includes/error-field', ['fieldName' => 'sitemapxml']) <td></tr>
    
    <tr><td><button type='submit' class='btn btn-primary'>Add My Site</button></td> </tr> 
</form>

@if(count($errors) > 0)
<div class='alert alert-danger'>
    Please correct the above errors.
</div>
@endif

@endsection

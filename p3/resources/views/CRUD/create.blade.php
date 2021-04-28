@extends('layouts/main')    


<link href='style.css' rel='stylesheet'> 

<h1>Add a Site</h1>  

 <p>Add a Website Here for Faster Indexing</p>  

<form method='POST' action='/CRUD/process'> 
    <div class='details'>* Required fields</div>
    {{ csrf_field() }}

    <label for='title'>* Title</label>
    <input type='text' name='title' id='title' value='{{ old("title") }}'> 
    @include('includes/error-field', ['fieldName' => 'title'])

    <label for='url'>* Site URL</label> 
    <div class='details'>

       <p> This is the uniform resource locator for your site's IP  
        <br>It’s suggested that you have a memorable (5-7 characters) URL for Branding & SEO 
         purposes.<em>“an example”</em> would be <em>“JSearch”</em>. 
        which is short, simple, memorable, and has "search" as a related site topic SEO keyword. </p> 
     </div> 

     <label for='url'>* url</label> 
    <input type='url' name='url' id='url' value='{{ old("url") }}'>
    @include('includes/error-field', ['fieldName' => 'url'])
    

    <label for='description'>* descripton</label> 
    <input type='text' name='description' id='description' value='{{ old("description") }}'>
    @include('includes/error-field', ['fieldName' => 'description'])

    <label for='body'>* Body </label>
    <input type='text' name='body' id='body' value='{{ old("body") }}'>
    @include('includes/error-field', ['fieldName' => 'body']) 

    <label for='sitemapxml'>* sitemapxml </label>
    <input type='text' name='sitemapxml' id='sitemapxml' value='{{ old("sitemapxml") }}'>
    @include('includes/error-field', ['fieldName' => 'sitemapxml']) 

   

    <button type='submit' class='btn btn-primary'>Add My Site</button>

    @if(count($errors) > 0) 
    <div class='alert alert-danger'> 
        Please correct the above errors.
    </div>
    @endif

</form>  


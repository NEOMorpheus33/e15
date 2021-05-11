@extends('layouts/main')       


<link href='style.css' rel='stylesheet'> 
<h1>Add a Site Below for Faster Indexing Similar to Google Console</h1> 
<table style="width:100%">
  <tr><td><h1>Add a Site</h1> </td></tr> 
    
    <form method='POST' action='/CRUD/list'> 
    <div class='details'>* Required fields</div>
    {{ csrf_field() }} </th> 
  </tr>
  <tr>
    <td><label for='title'>* Title</label>
    <input type='text' name='title' id='title' value='{{ old("title") }}'> 
    @include('includes/error-field', ['fieldName' => 'title'])</td>  </tr>
  

    <td><label for='url'>* Site URL</label>  
    <input type='text' name='url' id='url' value='{{ old("url") }}'>
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
    
   </table> 

  @endsection 





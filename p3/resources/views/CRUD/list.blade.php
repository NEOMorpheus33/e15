@extends('layouts/main')

@section('title')
Your List
@endsection

@section('content')
<h1>Your List</h1>

<p>This page will display all the sites on your list...</p>
@endsection

@if($sites)   

<div style="overflow-x"> 

<table>     
        <tr><td>{{$itess->url}} </td></tr>    
        <tr><td>{{$sitess->title}} </td></td>  
        <tr><td>{{$sitess->description}} </td></tr> 
        <tr><td>{{$sites->body}} </td></tr>  
</table> 
</div> 

@if(count($errors) > 0) 
    <div class='alert alert-danger'> 
        Please correct the above errors.
    </div>
    @endif 

    @endsection 



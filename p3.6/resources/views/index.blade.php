@extends('main')         

@section('Search') 

<nav>
    <ul>
        <!-- ...nav links here... -->

        <li> 
            @if(!Auth::user())
                <a href='/login'>Login</a>
            @else
                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                </form>
            @endif
        </li>
    </ul>
</nav>

@if(Auth::user())
<h2>
    Hello {{ Auth::user()->name }}!
</h2>
@endif

<table> 
  
 <form action="/process" method="GET">     

  <tr><td><input type="text" name="JoeSearch" value=" "> </td></tr>   
  <tr><td><label for="text">Type Keywords Search</label></td></tr> 
  
  <tr><td><input type="checkbox" name="PublicSearch" value="already_crawled"> </td></tr>  
  <tr><td><label for="PublicSearch">  Public Search </label></td> </tr>  

  <tr><td><input type="checkbox" name="PrivateSearch" value="already_crawled"> </td></tr> 
  <tr><td><label for="PublicSearch">  Private Search </label></td> </tr>         

</table>  

<table> 
<tr><th>I am an</th></tr> 
<tr><td><input type="radio" name="adult" value="$adult">An adult </td></tr>
<tr><td><input type="radio" name="adult" value="minor">A minor </td></tr>
  
<tr><td> <input type="submit" value="Answer"> </td></tr> 
</form> 
</table>   

<h1>Search Engine Results</h1> 
@if($serps) 

    <table border=1>
        <tr><td>{{$serps->title}} </td></td>  
        <tr><td>{{$serps->description}} </td></tr> 
        <tr><td>{{$serps->body}} </td></tr>   
    </table> 

@endif

@if(count($errors) > 0)
    <ul class='Request'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul> 
@endif 

@endsection      





 






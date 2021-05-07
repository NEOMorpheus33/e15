@extends('layouts/main')  

@section('content')

<h1> Do I think I'm passing? </h1>   

    <table> 
  
 <form action="/process" method="GET"> 

  <tr><td><input type="checkbox"  name="passing" value="Yes"> </td></tr> 
  <tr><td><label for="yescheck"> Yes </label></td></tr> 
  <tr><td><input type="checkbox" name="passing" value="No"> </td></tr> 
  <tr><td><label for="nocheck">  No </label></td> </tr>  

    </table> 

<table> 
  
    <tr><th>I am </th></tr> 

  <tr><td><input type="radio" name="school" value="In pre-school">In pre-school  </td></tr>
  <tr><td><input type="radio" name="school" value="In grade school">In grade school </td></tr>
  <tr><td><input type="radio" name="school" value="In high school">In high school </td></tr>
  <tr><td><input type="radio" name="school" value="In an undergrad college">In an undergrad college </td></tr>
  <tr><td><input type="radio" name="school" value="In an undergrad university">In an undergrad university </td></tr>
  <tr><td><input type="radio" name="school" value="A graduate student in college">A graduate student in college </td></tr>
  <tr><td><input type="radio" name="school" value="A graduate student at a university">A graduate student at a university </td></tr> <br>   

<tr><td> <input type="submit" value="Answer"> </td></tr> 

</form>

    </table>  

   
@if(count($errors) > 0)
    <ul class='Request'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul> 

  @endif 

 
@endsection  

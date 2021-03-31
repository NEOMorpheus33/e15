
@extends('layouts/main') 

@section('content')


<span style="color:green"><h1>Do I think I'm passing?</h1> </span> 

<form action="/process" method="GET">

  <input type="checkbox"  name="passing" value="Yes"> 
  <label for="yescheck"> Yes </label><br>
  <input type="checkbox" name="passing" value="No">
  <label for="nocheck"> No </label><br>
  
  <span style="color:green"><h1>I am</h1> </span> 

  <input type="radio" name="school" value="In pre-school">In pre-school  
  <input type="radio" name="school" value="In grade school">In grade school 
  <input type="radio" name="school" value="In high school">In high school  
  <input type="radio" name="school" value="In an undergrad college">In an undergrad college 
  <input type="radio" name="school" value="In an undergrad university">In an undergrad university 
  <input type="radio" name="school" value="A graduate student in college">A graduate student in college
  <input type="radio" name="school" value="A graduate student at a university">A graduate student at a university <br>   

<input type="submit" value="Answer"> 

</form>

@endsection

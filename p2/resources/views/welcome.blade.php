
@extends('layouts/main')

@section('content')
<span style="color:green"><h1>Do I think I'm passing?</h1> </span> 

<form action="/action_page3.php">
  <input type="checkbox" id="yescheck" name="yescheck" value="Yes :-)"> 
  <label for="yescheck"> Yes :-)</label><br>
  <input type="checkbox" id="nocheck" name="nocheck" value="No :-(">
  <label for="nocheck"> No :-(</label><br>
  <input type="submit" value="Submit"> <br>
  
  </form> 
  
  <span style="color:green"><h2>I am?:</h2></span>
  
  <form action="/e15p2hesweb/action_pageradio.php"> 
<input type="radio" name="gender" value="In pre-school">In pre-school  
<input type="radio" name="gender" value="In grade school">In grade school 
<input type="radio" name="gender" value="In high school">In high school  
<input type="radio" name="gender" value="In an undergrad college">In an undergrad college 
<input type="radio" name="gender" value="In an undergrad university">In an undergrad university 
<input type="radio" name="gender" value="A graduate student in college">A graduate student in college
<input type="radio" name="gender" value="A graduate student at a university">A graduate student at a university <br>   

<input type="submit" value="Answer"> 

</form>

@endsection

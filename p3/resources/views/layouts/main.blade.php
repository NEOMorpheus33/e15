<!Doctype html>        
<html lang='en'>    
 
    @yield('includes/title')    
    <link href='style.css' rel='stylesheet'>  
    @yield('includes/head') 
 
<body> 
 
 <h1>Joe's Harvard Private Search Engine</h1>    
    
    @yield('content') 
    @yield('Search') 
    @yield ('crawled') 
    @yield('addsite') 
    @if(session('flash-alert'))
    <div class='flash-alert'>{{ session('flash-alert') }}</div>
@endif

   <footer> 
   @yield('footer')
  </footer>     
</body> 
</html>    






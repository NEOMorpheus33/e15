<!Doctype html>        
<html lang='en'>    
<head> 
    <title>@yield('title', ('title'))</title>  
    <link href='style.css' rel='stylesheet'>  
    @yield('head') 
</head>    
<?php
<body>  

 <h1>Joe's Harvard Best Search Engine CSCI-E15 Buck</h1>   
    
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






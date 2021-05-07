<!Doctype html>        
<html lang='en'>    
<head> 
    <title>@yield('title')</title>  
    <link href='style.css' rel='stylesheet'>  
    @yield('head') 
</head>    

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
    <p> <span style='font-size:30px;'>&#9752; 
</span> Copyright 2021 | 
<a href="https://www.joepfanning.com">Joseph P. Fitzgerald Fanning</a> | JPFF | 
Dr. Buck | <a href="https://www.Harvard.edu"> Harvard University App Engineers HES</a>  <span style='font-size:30px;'>&#9752;</span></P> 
    </footer>     
</body>  
</html>    






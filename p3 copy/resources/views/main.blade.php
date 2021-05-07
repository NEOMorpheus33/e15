<!Doctype html>    
<html lang='en'>   
<head> 
    
    <title> @yield('title') </title>  
    <meta charset='utf-8'> 
    <link href='/css/style.css' rel='stylesheet'> 
    @yield('head') 
</head>  
<body>  

<!-- Author: copyright Joseph Fanning Grad student --> 
<!-- Author: & Susan Buck Professor --> 
<!--  Harvard University -->    



<a href='/'><img src='/images/JSLogo4.jpg' id='logo' alt='Joe Search Engine Logo Long Version 1.0'> </a>  

 
<section> 

<h1>Joe's Harvard Best Search Engine</h1>  

    @yield('Search')  

    </section> 

    @yield ('crawled') 

   </body> 
    
</html>   





<!doctype html> 
<html lang='en'>
<head>
    <title>@yield('title')</title> 
    <meta charset='utf-8'> 

    <link href='/css/style.css' rel='stylesheet'>

    @yield('head') 
</head>
<body>

<header>
    <a href='/'><img src='/images/JoeSearchlogo.jpg' id='logo' alt='Joe Search Logo'></a>  
</header> 

<section> 
    @yield('content')
</section>

<footer>
    &copy; Copyright Joseph Paul Fanning 
</footer>

</body>
</html>

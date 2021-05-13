<!Doctype html>
<html lang='en'>

<title>@yield('title')</title>
<link href='style.css' rel='stylesheet'>
<head>@yield('includes/head')</head>



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

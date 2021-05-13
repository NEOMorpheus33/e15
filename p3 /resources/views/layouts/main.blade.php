<?php 

<title>@yield('title')</title>
<link href='style.css' rel='stylesheet'>
<head>@yield('head')</head>
    <a href="e15p3.harvardjoeapps.com/images/JSLogo4.jpg">
    <img alt="JSearchLogo" src="e15p3.harvardjoeapps.com/images/JSLogo4.jpg" width="272" height="77" />

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

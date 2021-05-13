<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title')</title>

    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link href='style.css' rel='stylesheet'>

    @yield('head')
</head>
<body>

    @if(session('flash-alert'))
    <div class='flash-alert'>{{ session('flash-alert') }}</div>
    @endif


    <a href='/'><img alt="JSearchLogo" src="/images/JSLogo4.jpg" width="272" height="77" /></a>

    @if(Auth::user())
    <h2>
        Hello {{ Auth::user()->name }}!
    </h2>
    @endif


    <nav>
        <ul>
            <li><a href='/'>Home</a>
            <li><a href='/history'>History</a>

                @if(!Auth::user())
            <li><a href='/login'>Login</a>
            <li><a href='/login'>Register</a>

                @else
            <li>
                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                </form>
                @endif

        </ul>
    </nav>




    @yield('content')

    <footer>
        @yield('footer')
    </footer>
</body>
</html>

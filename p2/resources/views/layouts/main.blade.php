<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', "Harvard Extension School Calculator | Joseph Fanning")</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
        <link rel="stylesheet" href="styles/style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
        
        <style>

        .center {
          display: flex;
          justify-content: center;
          align-items: center;
        }
        </style>
        @yield('head')
</head>
<body>

<img src='/images/calc.jpg'>
<h1>Joe's Harvard | HES Grade Calculator</h1>

        @yield('content') 
</body>
</html> 


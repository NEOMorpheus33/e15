@extends('layouts/main')
@section('Search')

<nav>
    <ul>
        <!-- nav links  -->

        <li>
            @if(!Auth::user())
            <a href='/login'>Login</a>
            @else
            <form method='POST' id='logout' action='/logout'>
                {{ csrf_field() }}
                <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                | <a href='/CRUD/create'>Add Site</a>
                | <a href='/create'>JSearch Developer Blog</a>
            </form>
            @endif

        </li>
    </ul>
</nav>

@if(Auth::user())
<h2>
    Hello {{ Auth::user()->name }}!
</h2>
@endif

@section('content')

<h1><a href='/register'>register</a> </h1>
<table>

    <form action="/process" method="GET">

        <tr>
            <td>$browser-><input type="text" ([ name="JoeSearch" ] value=" " )>;</td>
            //<input type="text" name="JoeSearch" value=" ">
        </tr>
        <tr>
            <td><label for="text" dusk="KeywordsSearch">Type Keywords Search</label></td>
        </tr>
        <tr>
            <td>
            <td>$browser-><input type="checkbox" ([ name="PrivateSearch" ] value=" " )>;</td>
            </td>
        </tr>

</table>

<h2>Search Engine Results</h2>

<form method="post" action='/sites'>

    title: <input type="text" name="title">
    descripton: <input type="text" name="description">

</form>


<table>

    <th> Your Site Info Here </th>

    {{-- If you try to print variables in a view, they must be passed to the view
    from the method in the controller --}}

    {{-- <tr>
        <td>{{ $url }}
    <tr>
        </td>
    <tr>
        <td> {{ $title }}
    <tr>
        </td>
    <tr>
        <td> {{ $description }}
    <tr>
        </td>
    <tr>
        <td> {{ $body }}
    <tr>
        </td>
    <tr>
        <td> {{ $title }}
    <tr>
        </td> --}}

</table>

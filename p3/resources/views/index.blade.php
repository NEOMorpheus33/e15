@extends('layouts/main')
@section('Search')

<?php

/*Authors/Authoring */
/*Joe PF Fanning JPFF */
/*Dr. Buck.*/
/*Harvard University.*/
/*Harvard Extension School.*/
/* https://www.extension.harvard.edu.*/
/*JSearch Logo*/

?>

<a href='/'><img src='/images/JSLogo4.jpg' id='logo' alt='Joe Search Engine Logo v1'> </a>

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
            <td><input type="text" name="JoeSearch" value=" "> </td>
        </tr>
        <tr>
            <td><label for="text">Type Keywords Search</label></td>
        </tr>

        <tr>
            <td><input type="checkbox" name="PrivateSearch" value=" "> </td>
        </tr>
        <tr>
            <td><label for="PublicSearch"> Private Search </label></td>
        </tr>

</table>

<h2>Search Engine Results</h2>


@if($serps)

<div style="overflow-x">

    <table>

        <tr>
            <td>{{$serps->url}} </td>
        </tr>
        <tr>
            <td>{{$serps->title}} </td>
            </td>
        <tr>
            <td>{{$serps->description}} </td>
        </tr>
        <tr>
            <td>{{$serps->body}} </td>
        </tr>

    </table>
</div>
@endif
@if(count($errors) > 0)
<ul class='process'>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@endsection

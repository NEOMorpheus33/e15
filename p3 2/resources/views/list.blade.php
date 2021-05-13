<?php

@extends('layouts/main')       
@section('title') 

Your Site List:   

@section('content') 

@if($sites->count() == 0) 

<p>You have not added any books to your list yet.</p>
<p><a href='/sites'>Find books to add in our library...</a></p>

@extends('layouts/main')

@section('title')
Your List
@endsection

@section('content')
<h1>Your List</h1>

<p>This page will display all the books on your list...</p>
@endsection
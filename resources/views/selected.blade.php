@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/selected.css')}}">

<div class="navbar">
    <header>
        <center>
           <nav class="nav-user">
            <ul>
                <a href="/home"><li>HOME</li></a>
                <a href="/home"><li class="logo">WIKBOOKS&#169;</li></a>
                <a href="/login"><li>LOGOUT</li></a>
            </ul>
            </nav> 
        </center>
    </header>
</div>

@endsection
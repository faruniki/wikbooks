@extends('layout')
@section('content')

    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

    <div class="container">
        <div class="kiri">
            <a href="/" class="linklogo"><p class="wikbooks">WIKBOOKS&#169;</p></a>
            <center>
            <form action="" class="formlogin">
                <label for="email" class="labelcoi labelemail">Email</label><br>
                <input type="text" class="inputform" name="email" id="" placeholder="Your Email"><br><br><br>
                <label for="password" class="labelcoi">Password</label><br>
                <input type="password" class="inputform" name="password" id="" placeholder="Your Password">
                <br><br><br>
                
            </form>
            </center>
            
        </div>
        <div class="kanan">
            <p class="join">Join Our<br>Community</p>
            <p class="youcan">You can access and read all the books here, it's all free.</p>
        </div>
    </div>

@endsection
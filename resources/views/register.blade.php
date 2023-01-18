@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/register.css')}}">

    <div class="container">
        <div class="kiri">
            <a href="/" class="linklogo"><p class="wikbooks">WIKBOOKS&#169;</p></a>
            <center>
            <form action="" class="formlogin">
                <label for="name" class="labelcoi labelemail">Name</label><br>
                <input type="text" class="inputform" name="name" id="" placeholder="Your Name"><br><br>
                <label for="email" class="labelcoi">Email</label><br>
                <input type="text" class="inputform" name="email" id="" placeholder="Your Email"><br><br>
                <label for="number" class="labelcoi labelemail">Phone Number</label><br>
                <input type="text" class="inputform" name="number" id="" placeholder="Your Phone Number"><br><br>
                <label for="password" class="labelcoi labelemail">Password</label><br>
                <input type="password" class="inputform" name="password" id="" placeholder="Your Password"><br><br>
                <br><br> 
                <button type="submit" class="submitcoi">Register</button>
            </form>
            <p class="donthave">Already have an account? <a href="/login">Login</a></p>
            </center>
            
        </div>
        <div class="kanan">
            <p class="join">Join Our<br>Community</p>
            <p class="youcan">You can access and read all the books here, it's all free.</p>
        </div>
    </div>

@endsection
@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">

<div class="container">
    <header class="headernav">
        <a href="/" class="logo">WIKBOOKS&#169;</a>
        <nav class="navbar">
            <a href="/"><li>HOME</li></a>
            <a href="/books"><li>BOOKS</li></a>
            <a href="/contact"><li>CONTACT</li></a>
            <a href="/login"><li>LOGIN</li></a>
        </nav>
    </header>
    <img src="assets/img/gradient.png" class="gradient" alt="">
    <center><iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0158910565083!2d106.84162231427302!3d-6.644947766805972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sWikrama%20Bogor%20Vocational%20School!5e0!3m2!1sen!2sid!4v1673926931871!5m2!1sen!2sid" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
    <div class="desk">
        <p></p>
        <p class="judul-contact">Alamat</p>
        <p class="isi-contact">Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur 16720</p>
        <br><br>
        <p class="judul-contact">Telepon</p>
        <p class="isi-contact">(0251) 8242411<br>082221718035</p>
        <br><br>
        <p class="judul-contact">Email</p>
        <p class="isi-contact">prohumasi@smkwikrama.net</p>
        <br><br>
        <p class="judul-contact">NPSN</p>
        <p class="isi-contact">20220299</p>
    </div>
    <footer>
        <div class="footercoi">
            <div class="footlogo">
                <div class="ea">
                    <div class="anak-ea">
                        <img src="assets/img/wikrama.png" alt="">
                        <p class="wikbooksfoot">WIKRAMA BOOKS</p>
                        <p class="wikbooksfoot2">You can access book<br>for online and free</p>
                    </div>
                    <div class="anak2-ea">
                        
                    </div>
                </div>
                <div class="eaa">
                    <p class="judul2-ea">Alamat</p>
                        <p class="desk2-ea">Jl. Raya Wangun<br>Kelurahan Sindangsari<br>Bogor Timur 16720</p>
                        <p class="judul2-ea">Telepon</p>
                        <p class="desk2-ea">0251-8242411 / 082221718035<br>(Whatsapp)</p>
                </div>
            </div>
            <div class="foot1">
                <ul>
                    <p class="special-1"><b>Latest Books</b></p>
                    <li><a href="/books">Atomic Habits</a></li>
                    <li><a href="/books">The Hunger Games</a></li>
                    <li><a href="/books">To Kill a Mockbird</a></li>
                    <li><a href="/books">1984</a></li>
                    <li><a href="/books">Freakonomics</a></li>
                </ul>
            </div>
            <div class="foot2">
                <ul>
                    <p class="special-2"><b>Pages</b></p>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/tos">Terms of Use</a></li>
                    <li><a href="/privacypolicy">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="foot3">
                <ul>
                    <p class="special-3"><b>Pages</b></p>
                    <li><a href="/">Home</a></li>
                    <li><a href="/books">Books</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

@endsection
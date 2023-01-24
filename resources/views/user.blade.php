@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/user.css')}}">

<div class="navbar">
    <header>
        <center>
           <nav class="nav-user">
            <ul>
                <a href="/home"><li>HOME</li></a>
                <a href="/home"><li class="logo">WIKBOOKS&#169;</li></a>
                <a href="{{route('logout')}}"><li>LOGOUT</li></a>
            </ul>
            </nav> 
        </center>
    </header>
</div>
<div>
    <center>
        <div class="container">
            <div class="cell"> 
                <div class="kiri">
                    <img src="assets/img/great-gatsby.jpg" alt="">
                </div>
                <div class="kanan">
                <a href="/home/selected"><p class="title">The Great Gatsby</p></a>
                    <p class="creator">F. Scott Fitzgerald</p>
                    <ul class="desk">
                        <li>Category : Novel</li>
                        <li>Published : April 10, 1925</li>
                        <li>Languange : English</li>
                        <li>Pages : 180</li>
                        <li>Publisher : Charles Scribner's Sons</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
            <div class="kiri">
                    <img src="assets/img/anna3.jpg" alt="">
                </div>
                <div class="kanan">
                <a href="/home/selected"><p class="title">Anna Karenina</p></a>
                    <p class="creator">Leo Tolstoy</p>
                    <ul class="desk">
                        <li>Category : Novel</li>
                        <li>Published : 1887</li>
                        <li>Languange : English</li>
                        <li>Pages : 864</li>
                        <li>Publisher : The Russian Messenger</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
            <div class="kiri">
                    <img src="assets/img/ulysses.jpg" alt="">
                </div>
                <div class="kanan">
                <a href="/home/selected"><p class="title">Ulysses</p></a>
                    <p class="creator">James Joyce</p>
                    <ul class="desk">
                        <li>Category : Novel</li>
                        <li>Published : December, 1920</li>
                        <li>Languange : English</li>
                        <li>Pages : 732</li>
                        <li>Publisher : Shakespeare and Company</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
            <div class="kiri">
                    <img src="assets/img/atomic.jpg" alt="">
                </div>
                <div class="kanan">
                <a href="/home/selected"><p class="title">Atomic Habits</p></a>                    <p class="creator">James Clear</p>
                    <ul class="desk">
                        <li>Category : Self-Help</li>
                        <li>Published : October 16, 2018</li>
                        <li>Languange : English</li>
                        <li>Pages : 320</li>
                        <li>Publisher : Random House</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
            <div class="kiri">
                    <img src="assets/img/one-piece.jpg" alt="">
                </div>
                <div class="kanan">
                    <a href="/home/selected"><p class="title">One Piece</p></a>
                    <p class="creator">Eiichiro Oda</p>
                    <ul class="desk">
                        <li>Category : Manga</li>
                        <li>Published : July 22, 1997</li>
                        <li>Languange : Japanese</li>
                        <li>Volumes : 104</li>
                        <li>Publisher : Shueisha</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
            <div class="kiri">
                    <img src="assets/img/mockbird.jpg" alt="">
                </div>
                <div class="kanan">
                    <a href="/home/selected"><p class="title">To Kill a Mockingbird</p></a>
                    <p class="creator">Harper Lee</p>
                    <ul class="desk">
                        <li>Category : Novel</li>
                        <li>Published : July 11, 1960</li>
                        <li>Languange : English</li>
                        <li>Pages : 281</li>
                        <li>Publisher : J. B. Lippincott & Co.</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
            <div class="kiri">
                    <img src="assets/img/lost-time.jpg" alt="">
                </div>
                <div class="kanan">
                    <a href="/home/selected"><p class="title">In Search of Lost time</p></a>
                    <p class="creator">Marcel Proust</p>
                    <ul class="desk">
                        <li>Category : Philoshophy</li>
                        <li>Published : 1913</li>
                        <li>Languange : French</li>
                        <li>Pages : 4,215</li>
                        <li>Publisher : Grasset and Gallimard</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
            <div class="kiri">
                    <img src="assets/img/moby.jpg" alt="">
                </div>
                <div class="kanan">
                <a href="/home/selected"><p class="title">Moby Dick</p></a>
                    <p class="creator">Herman Melville</p>
                    <ul class="desk">
                        <li>Category : Novel</li>
                        <li>Published : October 18, 1851</li>
                        <li>Languange : English</li>
                        <li>Pages : 927</li>
                        <li>Publisher : Richard Bentley</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
            <div class="kiri">
                    <img src="assets/img/war-and-peace.jpg" alt="">
                </div>
                <div class="kanan">
                    <p class="title">War and Peace</p>
                    <p class="creator">Leo Tolstoy</p>
                    <ul class="desk">
                        <li>Category : Novel</li>
                        <li>Published : 1867</li>
                        <li>Languange : Russian, French</li>
                        <li>Pages : 1,225   </li>
                        <li>Publisher : Charles Scribner's Sons</li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="/home" class="showmorelink"><p class="showmore">Show More</p></a>
    </center>
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
                    <li><a href="/home">Home</a></li>
                    <li><a href="/login">Logout</a></li>
                    <li><a href="/admin">Admin</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>



@endsection
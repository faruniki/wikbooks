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
<div class="container">
    <div class="kiri">
        <center>
            <img src="../../assets/img/anna3.jpg" alt="">
        </center>
    </div>
    <div class="kanan">
        <p class="title">Anna Karenina</p>
        <p class="creator">Leo Tolstoy</p>
        <center>
            <button class="download">Download</button>
        </center>

        <ul class="desk">
                    <li>Category : Novel</li>
                    <li>Published : 1887</li>
                    <li>Languange : Russian</li>
                    <li>Pages : 864</li>
                    <li>Publisher : The Russian Messenger</li>
        </ul>
        <p class="synopsis-title">Synopsis :</p>
        <p class="synopsis">The Oblonsky family of Moscow is torn apart by adultery. Dolly Oblonskaya has caught her husband, Stiva, having an affair with their children’s former governess, and threatens to leave him. Stiva is somewhat remorseful but mostly dazed and uncomprehending. Stiva’s sister, Anna Karenina, wife of the St. Petersburg government official Karenin, arrives at the Oblonskys’ to mediate. Eventually, Anna is able to bring Stiva and Dolly to a reconciliation.<br><br>Meanwhile, Dolly’s younger sister, Kitty, is courted by two suitors: Konstantin Levin, an awkward landowner, and Alexei Vronsky, a dashing military man. Kitty turns down Levin in favor of Vronsky, but not long after, Vronsky meets Anna Karenina and falls in love with her instead of Kitty. The devastated Kitty falls ill. Levin, depressed after having been rejected by Kitty, withdraws to his estate in the country. Anna returns to St. Petersburg, reflecting on her infatuation with Vronsky, but when she arrives home she dismisses it as a fleeting crush. Vronsky, however, follows Anna to St. Petersburg, and their mutual attraction intensifies as Anna begins to mix with the freethinking social set of Vronsky’s cousin Betsy Tverskaya. </p>
    </div>
</div>
<footer>
        <div class="footercoi">
            <div class="footlogo">
                <div class="ea">
                    <div class="anak-ea">
                        <img src="../../assets/img/wikrama.png" alt="">
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

@endsection
@extends('layout')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/books.css')}}">

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
    <div class="container2">
        <div class="in-con1">
            <p class="incon-p">Here is It</p>
            <p class="incon-p1">TOP THREE BOOKS<br>OF ALL TIME<br>TO YOU READ</p>
            <a href="https://www.britannica.com/list/12-novels-considered-the-greatest-book-ever-written" class="source-1" target="_blank"><p class="incon-p2">Source: www.britannica.com</p></a>
        </div>
        <div class="in-con2">
            <img src="assets/img/deadpool.png" alt="" class="deadpool">
        </div>
    </div>
    <div class="list">
        <div class="list-1">
            <div class="list-kiri">
            <img src="assets/img/anna3.jpg" alt="">
            </div>
            <div class="list-kanan">
                <a href="https://g.co/kgs/Fcj74n" target="_blank" rel="noopener noreferrer"><p class="title-list">Anna Karenina</p></a>
                <a href="https://g.co/kgs/6FKxDT" target="_blank" rel="noopener noreferrer"><p class="creator-list">Leo Tolstoy</p></a>
                <p class="sinopsis-list">A crisis develops in the Oblonsky household when Dolly finds out about her husband's affair. Stiva's sister, Anna Karenina, arrives to reconcile the couple and dissuades Dolly from getting a divorce. Konstantin Levin, Stiva's friend, arrives in Moscow to propose to the eighteen year old Kitty Shtcherbatsky. She refuses him, for she loves Count Vronsky, a dashing army officer who has no intentions of marrying.</p>
            </div>
        </div>
        <div class="list-1">
        <div class="list-kiri">
            <img src="assets/img/mockbird.jpg" alt="">
            </div>
            <div class="list-kanan">
                <a href="https://g.co/kgs/zfDq9r" target="_blank" rel="noopener noreferrer"><p class="title-list">To Kill a Mockbird</p></a>
                <a href="https://g.co/kgs/7Zxr4F" target="_blank" rel="noopener noreferrer"><p class="creator-list">Harper Lee</p></a>
                <p class="sinopsis-list">Scout Finch lives with her brother, Jem, and their widowed father, Atticus, in the sleepy Alabama town of Maycomb. Maycomb is suffering through the Great Depression, but Atticus is a prominent lawyer and the Finch family is reasonably well off in comparison to the rest of society. One summer, Jem and Scout befriend a boy named Dill, who has come to live in their neighborhood for the summer, and the trio acts out stories together. </p>
            </div>
        </div>
        <div class="list-1">
        <div class="list-kiri">
            <img src="assets/img/great-gatsby.jpg" alt="">
            </div>
            <div class="list-kanan">
                <a href="https://g.co/kgs/qB54As" target="_blank" rel="noopener noreferrer"><p class="title-list">The Great Gatsby</p></a>
                <a href="https://g.co/kgs/kZCNGe" target="_blank" rel="noopener noreferrer"><p class="creator-list">F. Scott Fitzgerald</p></a>
                <p class="sinopsis-list">Nick Carraway, a young man from Minnesota, moves to New York in the summer of 1922 to learn about the bond business. He rents a house in the West Egg district of Long Island, a wealthy but unfashionable area populated by the new rich, a group who have made their fortunes too recently to have established social connections and who are prone to garish displays of wealth. Nick’s next-door neighbor in West Egg is a mysterious man named Jay Gatsby, who lives in a gigantic Gothic mansion and throws extravagant parties every Saturday night.</p>
            </div>
        </div>
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
                    <li><a href="/admin">Admin</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

@endsection
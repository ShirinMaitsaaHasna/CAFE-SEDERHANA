<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Metadata sesuai perintah -->
    <meta name="keywords" content="Neko Coffe, cake murah, toko roti,">
    <meta name="description" content="Website Neko Coffe">

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Neko Coffe</title>
</head>

<body>

    <!-- Navbar dengan class fixed-top agar tetap berada diatas meski halaman di scroll -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light p-100">
        <a class="navbar-brand" href="#">
            <img src="assets/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">Neko Meow Coffe
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <!-- Tanda pagar untuk identifikasi bahwa itu adalah ID -->
                    <a class="nav-link" href="#banner">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Pastikan setiap sesi halaman punya id untuk digunakan di navigasi -->
    <!-- ID element tidak perlu tanda pagar -->
    <div id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/cafe.jpg" class="d-block w-100" alt="Kopi Kita Banner">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Neko Coffe</h5>
                    <p>Tempat pertama para kucing Nongkrong!</p>
                </div>
            </div>
        </div>
    </div>

    <div id="menu" class="p-100" style="margin-top: 72px;">
        <div class="row">
             <div class="col-lg-4">
                <!-- Link juga dapat berbentuk card -->
                <a href="#menu" class="card" style="width: 100%;">
                    <img src="assets/coffee.jpg" class="card-img-top" alt="Menu">
                    <a href="#menu" class="placeholder">Menu</a>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#profile" class="card" style="width: 100%;">
                    <img src="assets/barista.jpg" class="card-img-top" alt="Menu">
                    <a href="#profile" class="placeholder">Profile</a>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#contact" class="card" style="width: 100%;">
                    <img src="assets/cafe.jpg" class="card-img-top" alt="Menu">
                    <a href="#contact" class="placeholder">Contact</a>
                </a>
            </div>
        </div>
    </div>

    <!-- Bungkus dalam row untuk membagi bagian utama dan sidebar di kanan -->
    <div class="row">

        <!-- Kolom pertama untuk bagian Menu dan Profile -->
        <div class="col-lg-8">
            <div id="menu" class="font-weight-normal p-50 text-center" style="padding-top: 100px;">Menu <b>Kami</b></div>

            <div class="row p-50" id="menu-section">
                <div class="col-lg-6">
                    <h3 class="font-weight-normal mb-3 mt-4">Minuman</h3>
                    <div id="drink" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#drink" data-slide-to="0" class="active"></li>
                            <li data-target="#drink" data-slide-to="1"></li>
                            <li data-target="#drink" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/kopi.jpg" class="d-block w-100" alt="Drink">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/coklat.jpg" class="d-block w-100" alt="Drink">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/hijau.jpg" class="d-block w-100" alt="Drink">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#drink" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#drink" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 class="font-weight-normal mb-3 mt-4">Makanan</h3>
                    <div id="food" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#food" data-slide-to="0" class="active"></li>
                            <li data-target="#food" data-slide-to="1"></li>
                            <li data-target="#food" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/waffle.jpg" class="d-block w-100" alt="Drink">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/roti.jpg" class="d-block w-100" alt="Drink">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/kentang.jpg" class="d-block w-100" alt="Drink">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#food" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#food" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div id="profile" class="font-weight-normal text-center p-50" style="padding-top: 100px;">
                Profil <b>Kami</b>
            </div>
            <div class="p-50" style="padding-right: none;">
                <p class="text-center mt-4">
                    Neko Coffe adalah sebuah coffee shop yang menghadirkan suasana hangat dan nyaman untuk semua kalangan,
                    Kami menyajikan berbagai pilihan kopi berkualitas yang dipilih langsung dari biji kopi lokal terbaik,
                    erta makanan ringan yang cocok menemani setiap cangkir kopi. Dengan konsep ruangan yang estetik dan ramah,
                    Neko Coffe menjadi tempat ideal untuk bersantai, bekerja, maupun berkumpul bersama teman.
                </p>
                <iframe class="mt-4" width="100%" height="400"
                    src="https://www.youtube.com/watch?v=DO12azYSWK4" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- kolom kedua untuk sidebar yang berisi ulasan pelanggan -->
        <div class="col-lg-4 p-3 bg-light pr-4" style="margin-top: 100px;">
            <div class="card mb-3" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Kucing Akml</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Pelanggan Neko Coffe</h6>
                    <p class="card-text">Miaw, miaw! pelayanannya sangat baik, barista yang ramah tamah meriah
                        menambah nilai plus!.</p>
                    <a href="#" class="card-link">Pelayananan Tebaik</a>
                    <a href="#" class="card-link">Rasa Kebahagiaan</a>
                </div>
            </div>

            <div class="card mb-3" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Chase Miller</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Pelanggan Neko Coffe</h6>
                    <p class="card-text">Kopinya yang sangat enaak, di minum dengan orang terkasih!.</p>
                    <a href="#" class="card-link">Pelayananan Tebaik</a>
                    <a href="#" class="card-link">Rasa Kebahagiaan</a>
                </div>
            </div>

            <div class="card mb-3" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Asep Sujejo</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Pelanggan Neko Coffe</h6>
                    <p class="card-text">Ngopi sambil main roblox, Mantab betul! wifi lancar macam licin!.</p>
                    <a href="#" class="card-link">Pelayanan Terbaik</a>
                    <a href="#" class="card-link">Rasa Kebahagiaan</a>
                </div>
            </div>

            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Draco Malfoy</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Pelanggan Neko Coffe</h6>
                    <p class="card-text">Saya auka kucing, dan nyaman dengan NEKKO COFFE! coccok untuk
                        skripsian. </p>
                    <a href="#" class="card-link">Pelayananan Terbaik</a>
                    <a href="#" class="card-link">Rasa Kebahagiaan</a>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="p-100" style="margin-top: 100px;">
        <h2 class="text-center font-weight-normal">Kontak <b>Kami</b></h2>
        <div class="row mt-5">
            <div class="col-lg-5">
                <div class="mb-3 border-solid border-bottom">
                    <h3 class="font-weight-normal">Neko Coffe</h3>
                    <p>kami memadukan rasa kopi premium dengan suasana yang hangat dan produktif.
                        Tidak hanya untuk pecinta kopi, tapi juga untuk siapa saja yang ingin bekerja,
                        berdiskusi, atau sekadar melepas penat.
                    </p>
                </div>

                <div class="mb-4 border-solid border-bottom">
                    <div class="row mb-1">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3">
                                    <img src="assets/instagram.png" width="30" height="30" alt>
                                </div>
                                <div class="col-xs-9 col-sm-9">
                                    <p>@Nekoffie</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3">
                                    <img src="assets/instagram.png" width="30" height="30" alt>
                                </div>
                                <div class="col-xs-9 col-sm-9">
                                    <p>@Nekoffie</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3">
                                    <img src="assets/instagram.png" width="30" height="30" alt>
                                </div>
                                <div class="col-xs-9 col-sm-9">
                                    <p>@Nekoffie</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <h3 class="font-weight-normal mb-3">Berlangganan Sekarang</h3>
                    <button class="btn btn-danger mb-5">Subscribe!</button>
                </div>
            </div>

            <div class="col-lg-7">
                   <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2778.1843731350245!2d111.90544650857692!3d-7.18063947043645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77810651b96081%3A0xf1720c99ff09edce!2sSMK%20Negeri%204%20Bojonegoro!5e1!3m2!1sid!2sid!4v1695403724046!5m2!1sid!2sid" "
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" width="100%" height="450"></iframe>
            </div>
        </div>
    </div>

    <footer class="mt-5 bg-dark d-flex justify-content-center align-items-center" style="height: 96px;">
        <p style="margin-bottom: 0;" class="text-light">202[5] &copy; Shirin Maitsaa Hasna</p>
    </footer>

    <script src="scripts/jquery-3.7.1.min.js"></script>
    <script src="scripts/bootstrap.bundle.min.js"></script>
</body>
</html>
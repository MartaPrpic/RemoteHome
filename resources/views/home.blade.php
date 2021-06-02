@extends('master')
@section("content")
<body>
<div class="header">
    <nav class="navbar navbar-expand-sm sticky-top">
        
        <div class="container-fluid ">
            <a class="navbar-brand" href="/">
                
                <img src="img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse " id="collapsibleNavbar">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active nav-element">
                        <a class="nav-link" href="/accommodation">Accommodation</a>
                    </li>
                    <li class="nav-item dropdown nav-element">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Currency
                </a>
                        <div id="currency" class="dropdown-menu">
                            <a class="dropdown-item" href="#">EURO <i class="fas fa-euro-sign"></i></a>
                            <a class="dropdown-item" href="#">USD <i class="fas fa-dollar-sign"></i></a>
                            <a class="dropdown-item" href="#">HRK</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-element">
                        <a class="nav-link dropdown-toggle  btn-login" type="button" href="#" id="navbardrop" data-toggle="dropdown">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        
                        @if(Session::has('user'))
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="/favourites"><i class="fas fa-heart 2x" style="color: #ff6248; padding-right:11px;"></i>Favourites</a>
                            <a class="dropdown-item" href="/list"><i class="fas fa-address-card" style="color: #78d52e; padding-right:11px;"></i>Host your property</a>
                            <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt" style="color: #8643e5; padding-right:11px"></i>Log out</a>
                        </div>
                        @else
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/login">Login</a>
                            <a class="dropdown-item" href="/register">Sign up</a>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


<script type="text/javascript">var oglasi = <?php echo json_encode($listings); ?>;
</script>

    <div class="container-fluid px-0 ">
        <div id="viewDiv" class="karta">
        </div>
    </div>
<div class="container">
    <div id="hello" class="row">
            <div class="col-md-6 kviz-pocetna">
                <h3>Find out what region of Croatia suits you !</h3>
                <a href="/quiz"><button class="mybutton" id="quiz-btn">Take a quiz</button></a>
            </div>
            <div class="col-md-6 kviz-pocetna">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/datafiles/AtGF4p7zA8LpP2R/data.json" background="transparent" speed="1" class="animacija" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</div>

    <section class="categories">
        <h2>SEARCH BY CATEGORY</h2>
        <div class="container-fluid">
            <a href="/accommodation"><button type="button" class="btn btn-primary"><i class="fas fa-home"></i> <h6>HOUSE</h6> </button></a>
            <a href="/accommodation"><button type="button" class="btn btn-primary"><i class="fas fa-building"></i> <h6>FLAT</h6></button></a>
            <a href="/accommodation"><button type="button" class="btn btn-primary"><i class="fas fa-bed"></i><h6>ROOM</h6></button></a>
            <a href="/accommodation"><button type="button" class="btn btn-primary"><i class="fas fa-users"></i><h6>CO-LIVING</h6></button></a>
            <a href="/accommodation"><button type="button" class="btn btn-primary"><i class="fas fa-ship"></i><h6>BOAT</h6></button></a>
            <a href="/accommodation"><button type="button" class="btn btn-primary"><i class="fas fa-tractor"></i><h6>FARM</h6></button></a>
    </section>



    <section class="popular">
        <div class="container">
            <h2>HOT THIS WEEK</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="kartica">
                        <div class="kartica-img">
                            <div>
                                <h6>Flat in Dubrovnik</h6>
                            </div>
                            <img src="img/hotel1.jpg">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kartica">
                        <div class="kartica-img">
                            <div>
                                <h6>Cottage in Ogulin</h6>
                            </div>
                            <img src="img/farma2.jpg">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kartica">
                        <div class="kartica-img">
                            <div>
                                <h6>Room in Osijek</h6>
                            </div>
                            <img src="img/soba2.jpg">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-link">
                    <h6>About</h6>
                    <div>
                        <a href="#"> Trust & Safety
                    </a>
                    </div>
                    <div>
                        <a href="/accommodation">
                        Accommodation
                    </a>
                    </div>
                    <div>
                        <a href="#">
                        Privacy Policy
                    </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <a class="footer-logo" href="/">
                        <img src="img/logo3.png" alt="Logo" style="width: 60px; height: 65px; ">
                    </a>
                    <p><i class="far fa-copyright" style="font-size: 15px;"></i> 2021 Remote Home</p>
                </div>

                <div class="col-md-4 ">
                    <h6>Social media</h6>
                    <p><i class="fab fa-facebook-square"></i> <i class="fab fa-instagram"></i> <i class="fab fa-pinterest-square"></i></p>
                </div>
            </div>
        </div>
    </section>




</body>
@endsection

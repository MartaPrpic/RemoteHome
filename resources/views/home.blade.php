@extends('master')
@section("content")
<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">

        <nav class="navbar navbar-expand-sm sticky-top">

            <div class="container">

                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo" style="width: 75px; height: 60px; padding-left: 20px;">
                </a>

                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse " id="collapsibleNavbar">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="Accommodation.html">Accommodation</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Language
                    </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Croatian <img src="img/hrv.png" style="width: 15px; height: 15px;"></a>
                                <a class="dropdown-item" href="#">English  <img src="img/eng.png" style="width: 15px; height: 15px;"></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Currency
                    </a>
                        <li>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">EURO <i class="fas fa-euro-sign"></i></a>
                                <a class="dropdown-item" href="#">USD <i class="fas fa-dollar-sign"></i></a>
                                <a class="dropdown-item" href="#">HRK</a>
                            </div>
                        </li>
                        @if(Session::has('user'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-secondary btn-login" type="button" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">Messages</a>
                                <a class="dropdown-item" href="">Favourites</a>
                                <a class="dropdown-item" href="">Reservations</a>
                                <a class="dropdown-item" href="">Personal</a>
                                <a class="dropdown-item" href="">Settings</a>
                                <a class="dropdown-item" href="">Contact</a>
                                <a class="dropdown-item" href="">Privacy Policy</a>
                                <a class="dropdown-item" href="/logout">Log out</a>
                                <a class="dropdown-item" href="/listproperty">Host your property</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-secondary btn-login" type="button" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/login">Login</a>
                                <a class="dropdown-item" href="/register">Register</a>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>-->

    <div class="container-fluid px-0 ">
        <div class="karta">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917793.8170734323!2d14.163380898732584!3d44.424791892250234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133441080add95ed%3A0xa0f3c024e1661b7f!2sCroatia!5e0!3m2!1sen!2shr!4v1619386506925!5m2!1sen!2shr"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <div class="search">
                <p>
                    <form class="form-inline" action="/action_page.php">
                        <input class="search-box mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </p>
            </div>
        </div>
        <div class="kviz">
            <a href="/quiz">
                <p>
                    <i class="far fa-lightbulb"></i> Take a quiz to find out what area suits you best</p>
            </a>
        </div>

    </div>


    <!--novo-->

    <section class="categories">
        <h2> C A T E G O R I E S</h2>
        <div class="container">
            <div class="row okvir-cat">
                <div class="col-md-6 ikone-cat">
                    <button type="button" class="btn btn-primary"><i class="fas fa-home"></i> <h6>House</h6></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-building"></i><h6>Flat</h6></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-bed"></i><h6>Room</h6></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-users"></i><h6>Co-living</h6></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-ship"></i><h6>Boat</h6></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-tractor"></i><h6>Farm</h6></button>
                </div>
            </div>
    </section>



    <!--novo-->

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
    

</body>

</html>
@endsection

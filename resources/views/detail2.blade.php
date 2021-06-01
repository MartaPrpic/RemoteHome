@extends('master')
@section("content")
<head>
    <script type="text/javascript">
        var oglas = "<?php echo $listing['address'] ?>";
    </script>
</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-sm sticky-top">

        <div class="container-fluid ">
            <a class="navbar-brand" href="/">

                <img src="/img/logo.png" alt="Logo">
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
                        <div class="dropdown-menu">
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
                            <a class="dropdown-item" href="/favourites">Favourites</a>
                            <a class="dropdown-item" href="/list">Host your property</a>
                            <a class="dropdown-item" href="/logout">Log out</a>
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
<div class="container-fluid">
  <div class="row">
    <div class="col md-6 border">
    <div class="about-room">
            
                <div>
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            @foreach(json_decode($listing['images']) as $image)
                            <div class="carousel-item {{$image == head(json_decode($listing['images'])) ? 'active' : ''}}">
                                <img src="{{'/images/' . $image}}" alt="apartman5">
                            </div>
                            @endforeach
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
        </div>  
    </div>
    <div class="col border">
        <div id="viewDiv2" class="karta2 esri-widget"></div>
    </div>
  </div>
</body>
@endsection
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

<section class="filter">
    <div class="container">
        <div class="row" id="categories" class="oglas-basic">
            <div class="col-sm-2 interes"><input type="checkbox" name="categoryCheck" value="House" class="hidden" id="cb"><label for="cb"><i class="fas fa-home"></i><h6>HOUSE</h6></label></div>
            <div class="col-sm-2 interes"><input type="checkbox" name="categoryCheck" value="Flat" class="hidden" id="cb1"><label for="cb1"><i class="fas fa-building"></i> <h6>FLAT</h6></label></div>
            <div class="col-sm-2 interes"><input type="checkbox" name="categoryCheck" value="Room" class="hidden" id="cb2"><label for="cb2"><i class="fas fa-bed"></i><h6>ROOM</h6></label></div>
            <div class="col-sm-2 interes"><input type="checkbox" name="categoryCheck" value="Co-living" class="hidden" id="cb3"><label for="cb3"><i class="fas fa-users"></i><h6>CO-LIVING</h6></label></div>
            <div class="col-sm-2 interes"><input type="checkbox" name="categoryCheck" value="Boat" class="hidden" id="cb4"><label for="cb4"><i class="fas fa-ship"></i><h6>BOAT</h6></label></div>
            <div class="col-sm-2 interes"><input type="checkbox" name="categoryCheck" value="Rustic" class="hidden" id="cb5"><label for="cb5"><i class="fas fa-tractor"></i><h6>FARM</h6></label></div>
    </div>
</section>

<section class="smjestaji">
    <div class="container">
        <div class="row">
            @foreach($listings as $listing)
            <div class="col-md-3" name="oglas" id="{{$listing['category']}}">
                <div class="smjestaj-box" id ="{{$listing['type']}}">
                    <a href="detail/{{$listing['id']}}">
                        <div class="smjestaj-img">
                            <div class="infor">
                                <ul>
                                    <li>Bedrooms: {{$listing['bedrooms']}}</li>
                                    <li>Bathrooms: {{$listing['bathrooms']}}</li>
                                    <li>{{$listing['insidesize']}} m2</li>
                                </ul>
                            </div>
                            <img src="{{'images/' . head(json_decode($listing['images']))}}" alt="house" style="object-fit:cover;">
                        </div>
                        <div class="smjestaj-opis">
                            <a href="detail/{{$listing['id']}}">
                                <h6>{{$listing['name']}}</h6>
                            </a>
                            <div class="srce">
                                <h5 style="font-style:italic;">{{$listing['price']}} EUR</h5>
                                <div id="heart">
                                    <form action="/favourite" method="POST" style="display:inline">
                                        @csrf
                                        <input type="hidden" name="listing_id" value={{$listing['id']}}>
                                        <button type="submit" class="btn"><i class="far fa-heart"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
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
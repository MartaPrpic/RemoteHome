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
    <!--
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
-->

    <div class="filter-acc"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
    </div>
    <div id="mobile-filter">
        <div>
            <h5 class="p-1 border-bottom">Category</h5>
            <ul>
                <li><input type="checkbox" name="categoryCheck" value="House" class="hidden" id="cb"><label for="cb">
                        <h6><i class="fas fa-home"></i> HOUSE</h6>
                    </label> <input type="checkbox" name="categoryCheck" value="Flat" class="hidden" id="cb1"><label for="cb1">
                        <h6><i class="fas fa-building"></i> FLAT</h6>
                    </label></li>

                <li><input type="checkbox" name="categoryCheck" value="Room" class="hidden" id="cb2"><label for="cb2">
                        <h6><i class="fas fa-bed"></i> ROOM</h6>
                    </label> <input type="checkbox" name="categoryCheck" value="Co-living" class="hidden" id="cb3"><label for="cb3">
                        <h6><i class="fas fa-users"></i> CO-LIVING</h6>
                    </label></li>

                <li><input type="checkbox" name="categoryCheck" value="Boat" class="hidden" id="cb4"><label for="cb4">
                        <h6><i class="fas fa-ship"></i> BOAT</h6>
                    </label> <input type="checkbox" name="categoryCheck" value="Rustic" class="hidden" id="cb5"><label for="cb5">
                        <h6><i class="fas fa-tractor"></i> FARM</h6>
                    </label></li>

            </ul>
        </div>
        <div>
            <h5 class="p-1 border-bottom">Filter By</h5>
            <p><label for="amount">Price range:</label>
                <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
            </p>
            <div id="slider-range"></div>

            <!--<p class="mb-2">Price</p>
            
            -<ul class="list-group">
                <li class="list-group-item list-group-item-action mb-2 rounded"><input id="priceSlider" class="slider" type="range" min="10" max="2000" value="1000" step="100" style="width: 100%;"></li>
                <li>
                    <p style="float: left;">10 EUR </p>
                    <p style="float: right;">2000 EUR </p>
                </li>

            </ul>-->
        </div>
        <div>
            <h6 class="p-1">Bedroom</h6>
            <select name="bedrooms" id="bedrooms" class="custom-select ml-md-2">
                <option selected>Bedrooms</option>
                <option value="0">T0</option>
                <option value="1">T1</option>
                <option value="2">T2</option>
                <option value="3">T3</option>
                <option value="4">T4</option>
                <option value="5+">T5+</option>
            </select>
        </div>
        <div>
            <h6 class="p-1">Floor</h6>
            <select name="floor" id="floor" class="custom-select ml-md-2">
                <option selected>Floor</option>
                <option value="Basement">Basement</option>
                <option value="Semi-basement">Semi-basement</option>
                <option value="Ground">Ground</option>
                <option value="Middle">Middle</option>
                <option value="Top">Top</option>
                <option value="Attic">Attic</option>
            </select>
        </div>
        <div>
        <h6 class="p-1">Additional information:</h6>
            <ul>
                <li><input type="checkbox" name="additionalinfo[]" value="Terrace" class="hidden" id="cbb"><label for="cbb"><h6>Terrace</h6></label>
                <input type="checkbox" name="additionalinfo[]" value="Elevator" class="hidden" id="cbb1"><label for="cbb1"><h6>Elevator</h6></label></li>
                <li><input type="checkbox" name="additionalinfo[]" value="Storage room" class="hidden" id="cbb2"><label for="cbb2"><h6>Storage room</h6></label>
                <input type="checkbox" name="additionalinfo[]" value="Air conditioning" class="hidden" id="cbb3"><label for="cbb3"><h6>Air conditioning</h6></label></li>
                <li><input type="checkbox" name="additionalinfo[]" value="Garden" class="hidden" id="cbb5"><label for="cbb5"><h6>Garden</h6></label>
                <input type="checkbox" name="additionalinfo[]" value="Pool" class="hidden" id="cbb6"><label for="cbb6"><h6>Pool</h6></label></li>
                <li><input type="checkbox" name="additionalinfo[]" value="Parking spot" class="hidden" id="cbb7"><label for="cbb7"><h6>Parking spot</h6></label>
                <input type="checkbox" name="additionalinfo[]" value="Pet friendly" class="hidden" id="cbb8"><label for="cbb8"><h6>Pet friendly</h6></label></li>
            </ul>
        </div>
        <div>
            <input type="button" id="applyFilter" value="Apply Filter"></input>
            <input type="button" id="resetFilter" value="Reset"></input>
        </div>
    </div>

    <section class="smjestaji">
        <div class="container-fluid">
            <div class="row">
                @foreach($listings as $listing)
                <div class="col-md-3" name="oglas" id="{{$listing['category']}}">
                    <div class="smjestaj-box" id="{{$listing['type']}}">
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
                                <ul name="additional" style="display:none;">
                                            @foreach($listing['additionalinfo'] as $additional)
                                            <li>{{$additional}}</li>
                                            @endforeach
                                </ul>
                                    <span name="sobe" id="" style="display:none;">{{$listing['bedrooms']}}</span>
                                    <h5 name="price" style="font-style:italic;">{{$listing['price']}} EUR</h5>
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
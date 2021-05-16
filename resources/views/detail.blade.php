@extends('master')
@section("content")
<div class="header">
    <nav class="navbar navbar-expand-sm sticky-top">
        <!--promjenila u container-fluid-->
        <div class="container-fluid ">
            <a class="navbar-brand" href="/">
                <!--makla style komponentu iz img jer sam je prebacila u css-->
                <!--u svaki li dodala nav-element klasu-->
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
                        <!--dodala dropdown-menu-right komponentu-->
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

<section class="room">
<script type="text/javascript">var oglas = "<?php echo $listing['address'] ?>";
</script>

<div class="container room-container">
    <!--dodala row -->
    <!--dodala div room-icon-->
    <div class="row">
        <div class="back">
            <a href="/accommodation"><button type="button" class="btn btn-outline-primary"><i class="fas fa-angle-double-left"></i> back</button></a>
        </div>
        <div class="room-icon">
            <div class="col-md-12">
                <form action="/favourite" method="POST" style="display:inline">
                    @csrf
                    <input type="hidden" name="listing_id" value={{$listing['id']}}>
                    <button type="submit" class="btn"><i class="far fa-heart"></i></button>
                </form>@if(Session::has('user'))
                <button style="display:inline;" onclick="show_phone_number()" class="btn btn-light"><i class="fas fa-phone"></i></button>
                <div style="display:none" id="listing_phone_number"}><h5 style="display:inline; margin-left:10px;"  class="animate__animated animate_fadeInLeft">{{$listing['phone_number']}}</h5></div>
                <script>
                    let phone_number= document.getElementById('listing_phone_number');

                    function show_phone_number(){
                        let bool = true;
                        if(bool){
                            phone_number.style.display = "inline";
                            bool = false;
                            console.log(bool);
                        }else{
                            phone_number.style.display = "none";
                        }

                    }
                </script>
                @else
                <form style="display:inline">
                    <input type="hidden" name="listing_phone_number" value={{$listing['phone_number']}}>
                    <button onclick="show_phone_number_error()" class="btn btn-light"><i class="fas fa-phone"></i></button>
                </form>
                @endif
            </div>
        </div>

        <div class="row about-room">
            <div class="col-md-6 ">
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
            <div class="col-md-6 about-room">
                <div class="btn-container">
                    <ul class="nav nav-tabs nav-room" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#info"><i class="fas fa-info-circle"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#basic">Basic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#map">Map</a>
                        </li>
                    </ul>

                    <!-- Makla iz svakog diva row room-icon -->

                    <div class="tab-content">
                        <div id="info" class="container tab-pane active"><br>
                            <h3>{{$listing['name']}}</h3>
                            <p>{{$listing['description']}}</p>
                            <p>Price/month: {{$listing['price']}} €</p>
                        </div>
                        <div id="basic" class="container tab-pane fade"><br>
                            <div class="row">
                                <div class="basic-lista">
                                    <h3>Basic</h3>
                                    <ul>
                                        <li>Floor: {{$listing['floor']}}</li>
                                        <li>Bedrooms: {{$listing['bedrooms']}}</li>
                                        <li>Bathrooms: {{$listing['bathrooms']}}</li>
                                        <li>Inside size: {{$listing['insidesize']}} m2</li>
                                        <li>Outside size: {{$listing['outsidesize']}} m2</li>
                                    </ul>
                                </div>
                                <div class="basic-lista">
                                    <h3>Expenses</h3>
                                    <ul>
                                        @foreach($listing['expences'] as $expence)
                                        <li>{{$expence}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="basic-lista">
                                    <h3>Additional:</h3>
                                    <ul>
                                        @foreach($listing['additionalinfo'] as $additional)
                                        <li>{{$additional}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="map" class="container tab-pane fade"><br>
                            <h3>Location</h3>
                            <div class="row">
                                <!--promijenila sadržaj diva, dodala botune-->
                                <div class="md-6 filter">
                                    <input type="checkbox" name="mapfilter[]" value="Restaurant" class="hidden" id="cbm"><label for="cbm">Restaurant</label>
                                    <input type="checkbox" name="mapfilter[]" value="Groceries" class="hidden" id="cbm1"><label for="cbm1">Groceries</label>
                                    <input type="checkbox" name="mapfilter[]" value="Nightlife" class="hidden" id="cbm2"><label for="cbm2">Nightlife</label>
                                    <input type="checkbox" name="mapfilter[]" value="Cafes" class="hidden" id="cbm3"><label for="cbm3">Cafes</label>
                                    <input type="checkbox" name="mapfilter[]" value="Gym" class="hidden" id="cbm4"><label for="cbm4">Gym</label>
                                    <input type="checkbox" name="mapfilter[]" value="Shopping" class="hidden" id="cbm5"><label for="cbm5">Shopping</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--dodala div za kartu-->

<div class="container">
    <h2>Explore the Area</h2>
    <div id="viewDiv2" class="karta2">
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
                    <img src="/img/logo3.png" alt="Logo" style="width: 60px; height: 65px; ">
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
@endsection
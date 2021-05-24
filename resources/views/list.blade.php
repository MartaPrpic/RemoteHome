@extends('master')
@section("content")
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
                  Language
                </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Croatian <img src="img/hrv.png" style="width: 15px; height: 15px;"></a>
                            <a class="dropdown-item" href="#">English  <img src="img/eng.png" style="width: 15px; height: 15px;"></a>
                        </div>
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
    
    <section class="oglas">
        
        <div class="container-fluid">
            <h4> Host Your Home</h4>
            <form method="POST" action="list" enctype="multipart/form-data" id="list">
                @csrf
                <div class="row oglas-okvir">
                    <div class="col-md-6">
                        <div class="oglas-basic">
                            <h3>Host contact information</h3>
                            <div class="oglas-basic">
                                <input type="text" name="host_name" id="host_name" class="form-control" placeholder="Name">
                            </div>
                            <div class="oglas-basic">
                                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone number (+385 91 12345678)">
                            </div>
                        </div>
                        <div class="oglas-basic">
                            <h3>Property</h3>
                            <div class="oglas-basic">
                                <select id="category" name="category" class="custom-select">
                                    <option selected>Category</option>
                                    <option id="shared" value="Shared property">Shared property</option>
                                    <option value="Flat">Flat/Apartment</option>
                                    <option value="Rustic">Rustic or traditional home</option>
                                    <option value="House">House</option>
                                </select>
                                <select id="type" name="type" class="custom-select" style="display:none">
                                    <option selected>Type</option>
                                    <option value="Room">Room</option>
                                    <option value="Boat">Boat</option>
                                    <option value="Co-living">Co-living</option>
                                </select>
                            </div>
                            <div class="oglas-basic">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Naslov">
                            </div>
                            <div class="oglas-basic">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Lokacija (Street name, Number, City)">
                            </div>
                            <div class="oglas-basic">
                                <input type="text" class="form-control" name="price" id="price" placeholder="Cijena (EUR)">
                            </div>
                            
                            <div class="oglas-basic">

                                <div class="form-group" style="text-align: left;">
                                    <h5>Write description:</h5>
                                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="oglas-basic">
                                <h5>Basic information:</h5>
                                <select name="condition" id="condition" class="custom-select">
                                    <option selected>Condition</option>
                                    <option value="New">New</option>
                                    <option value="Good">Good condition</option>
                                    <option value="Outdated">Outdated</option>
                                </select>
                                <div class="oglas-basic">
                                    <select name="bedrooms" id="bedrooms" class="custom-select" >
                                        <option selected>Bedrooms</option>
                                        <option value="0">T0</option>
                                        <option value="1">T1</option>
                                        <option value="2">T2</option>
                                        <option value="3">T3</option>
                                        <option value="4">T4</option>
                                        <option value="5+">T5+</option>
                                    </select>
                                </div>
                                <div class="oglas-basic">
                                    <select name="bathrooms" id="bathrooms" class="custom-select">
                                        <option selected>Bathroom number</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4+">4+</option>
                                    </select>
                                </div>
                                <div class="oglas-basic">
                                    <select name="floor" id="floor" class="custom-select">
                                        <option selected>Floor</option>
                                        <option value="Basement">Basement</option>
                                        <option value="Semi-basement">Semi-basement</option>
                                        <option value="Ground">Ground</option>
                                        <option value="Middle">Middle</option>
                                        <option value="Top">Top</option>
                                        <option value="Attic">Attic</option>
                                    </select>
                                </div>
                                <div class="oglas-basic">
                                    <input type="text" name="insidesize" id="insidesize" class="form-control" placeholder="Inside area size (m2)">
                                </div>
                                <div class="oglas-basic">
                                    <input type="text" name="outsidesize" id="outsidesize" class="form-control" placeholder="Outside area size (m2)">
                                </div>
                                <div class="oglas-basic">
                                    <h5>Additional information:</h5>
                                    <input type="checkbox" name="additionalinfo[]" value="Terrace" class="hidden" id="cbb"><label for="cbb">Terrace</label>
                                    <input type="checkbox" name="additionalinfo[]" value="Elevator" class="hidden" id="cbb1"><label for="cbb1">Elevator</label>
                                    <input type="checkbox" name="additionalinfo[]" value="Storage room" class="hidden" id="cbb2"><label for="cbb2">Storage room</label>
                                    <input type="checkbox" name="additionalinfo[]" value="Air conditioning" class="hidden" id="cbb3"><label for="cbb3">Air conditioning</label>
                                    <input type="checkbox" name="additionalinfo[]" value="Backyard" class="hidden" id="cbb4"><label for="cbb4">Backyard</label>
                                    <input type="checkbox" name="additionalinfo[]" value="Garden" class="hidden" id="cbb5"><label for="cbb5">Garden</label>
                                    <input type="checkbox" name="additionalinfo[]" value="Pool" class="hidden" id="cbb6"><label for="cbb6">Pool</label>
                                    <input type="checkbox" name="additionalinfo[]" value="Parking spot" class="hidden" id="cbb7"><label for="cbb7">Parking spot</label>
                                    <input type="checkbox" name="additionalinfo[]" value="Pet friendly" class="hidden" id="cbb8"><label for="cbb8">Pet friendly</label>
                                </div>

                                
                                <div class="oglas-basic">
                                    <h5>Expences included in price:</h5>
                                    <input type="checkbox" name="expences[]" value="all" class="hidden" id="cb"><label for="cb">all</label>
                                    <input type="checkbox" name="expences[]" value="excluded" class="hidden" id="cb1"><label for="cb1">Excluded</label>
                                    <input type="checkbox" name="expences[]" value="electricity" class="hidden" id="cb2"><label for="cb2">electricity</label>
                                    <input type="checkbox" name="expences[]" value="TV" class="hidden" id="cb3"><label for="cb3">TV</label>
                                    <input type="checkbox" name="expences[]" value="wi-fi" class="hidden" id="cb4"><label for="cb4">wi-fi</label>
                                    <input type="checkbox" name="expences[]" value="water" class="hidden" id="cb5"><label for="cb5">water</label>
                                    <input type="checkbox" name="expences[]" value="gas" class="hidden" id="cb6"><label for="cb6">gas</label>
                                    <input type="checkbox" name="expences[]" value="cleaning services" class="hidden" id="cb7"><label for="cb7">cleaning services</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-0">
                        <div class="oglas-slika">
                            <h5 style="display:inline; padding:100px 0px !important;">Upload images here</h5>
                            <input style="margin-left: 20px; padding:100px 0px;" type="file" name="images[]" id="images" multiple="">
                        </div>
                    </div>
                </div>
                <div class="oglas-post">
                    <button type="submit" class="button btn btn-outline">List</button>
                </div>
            </form>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-link">
                    <h6>About </h6>
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
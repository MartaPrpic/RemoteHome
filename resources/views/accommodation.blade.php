@extends('master')
@section("content")
<nav class="navbar navbar-expand-sm sticky-top">

        <div class="container d-flex justify-content-center">
           <!-- <div class="col-md-4" style="text-align: left;">

                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo" style="width: 75px; height: 60px; padding-left: 20px;">
                </a>
            </div>
            <div class="col-md-4" style="text-align: left;">
                <h3>Accommodation</h3>
            </div>-->

            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2 " style="width: fit-content;" type="text" placeholder="Search accommodation">
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>

        </div>
</nav>
    <section class="filter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <button type="button" class="btn btn-outline-info">House</button>
                    <button type="button" class="btn btn-outline-info">Flat</button>
                    <button type="button" class="btn btn-outline-info">Room</button>
                    <button type="button" class="btn btn-outline-info">Co-living</button>
                    <button type="button" class="btn btn-outline-info">Boat</button>
                    <button type="button" class="btn btn-outline-info">Cottage</button>
                </div>
            </div>
        </div>
    </section>


    <section class="smjestaji">
        <div class="container">
            <div class="row">
                @foreach($listings as $listing)
                        <div class="col-md-3" id="{{$listing['id']}}">
                            <a href="detail/{{$listing['id']}}">
                                <div class="smjestaj-box">
                                    <div class="smjestaj-opis">
                                            <h5>{{$listing['name']}}</h5>
                                    </div>
                                    <div class="smjestaj-img">
                                        <div class="infor">
                                            <p>{{$listing['description']}}</p>
                                        </div>
                                        <img src="{{'images/' . head(json_decode($listing['images']))}}" alt="house">
                                    </div>
                                </div>
                            </a>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-link">
                    <h6>About Us</h6>
                    <div>
                        <a href="#"> Contact
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

@endsection
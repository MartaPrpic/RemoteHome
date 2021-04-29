@extends('master')
@section("content")
<section>
    <div class="container">
    @foreach($favourites as $listing)
            <div class="col-md-3" id="{{$listing->id}}">
                <a href="detail/{{$listing->id}}">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                                <h5>{{$listing->name}}</h5>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>{{$listing->description}}</p>
                            </div>
                            <img src="{{'images/' . json_decode(json_encode($listing->images), FALSE)}}" alt="house">
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
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
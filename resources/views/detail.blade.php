@extends('master')
@section("content")
<head>
    <style>
        .item{
            transition: .5s ease-in-out;
            padding:0px !important;
        }
        .item:hover{
            filter:brightness(80%);
        }
    </style>
</head>
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
                            <a class="dropdown-item" href="/favourites"><i class="fas fa-heart 2x" style="color: #ff6248; padding-right:11px;"></i>Favourites</a>
                            <a class="dropdown-item" href="/list"><i class="fas fa-address-card" style="color: #ff6248; padding-right:11px;"></i>Host your property</a>
                            <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt" style="color: #ff6248; padding-right:11px"></i>Log out</a>
                        </div>
                        @else
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/login"><i class="fas fa-sign-in-alt" style="color: #ff6248; padding-right:11px"></i>Login</a>
                            <a class="dropdown-item" href="/register"><i class="fas fa-user-plus" style="color: #ff6248; padding-right:11px"></i>Sign up</a>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<section class="room">
    <script type="text/javascript">
        var oglas = "<?php echo $listing['address'] ?>";
        baguetteBox.run('.tz-gallery');
    </script>

    <div class="container-fluid room-container">
        <!--
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
                    <div style="display:none" id="listing_phone_number" }>
                        <h5 style="display:inline; margin-left:10px;" class="animate__animated animate_fadeInLeft">{{$listing['phone_number']}}</h5>
                    </div>
                    <script>
                        let phone_number = document.getElementById('listing_phone_number');

                        function show_phone_number() {
                            let bool = true;
                            if (bool) {
                                phone_number.style.display = "inline";
                                bool = false;
                                console.log(bool);
                            } else {
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
            

        <div class="about-room">
            
                <div>
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <div class="carousel-inner">
                            @foreach(json_decode($listing['images']) as $image)
                            <div class="carousel-item {{$image == head(json_decode($listing['images'])) ? 'active' : ''}}">
                                <img src="{{'/images/' . $image}}" alt="apartman5">
                            </div>
                            @endforeach
                        </div>

                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
        </div> 

<div class="top-content">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-6 col-sm-6 col-md-4 col-lg-3 active">
                    <img src="assets/img/backgrounds/1.jpg" class="img-fluid mx-auto d-block" alt="img1">
                </div>
                <div class="carousel-item col-6 col-sm-6 col-md-4 col-lg-3">
                    <img src="assets/img/backgrounds/2.jpg" class="img-fluid mx-auto d-block" alt="img2">
                </div>
                <div class="carousel-item col-6 col-sm-6 col-md-4 col-lg-3">
                    <img src="assets/img/backgrounds/3.jpg" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-6 col-sm-6 col-md-4 col-lg-3">
                    <img src="assets/img/backgrounds/4.jpg" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-6 col-sm-6 col-md-4 col-lg-3">
                    <img src="assets/img/backgrounds/5.jpg" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-6 col-sm-6 col-md-4 col-lg-3">
                    <img src="assets/img/backgrounds/6.jpg" class="img-fluid mx-auto d-block" alt="img6">
                </div>
                <div class="carousel-item col-6 col-sm-6 col-md-4 col-lg-3">
                    <img src="assets/img/backgrounds/7.jpg" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-6 col-sm-6 col-md-4 col-lg-3">
                    <img src="assets/img/backgrounds/8.jpg" class="img-fluid mx-auto d-block" alt="img8">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>-->

<div class="container-fluid" style="padding:0px !important;">
    
    <div class="row">
    @foreach(json_decode($listing['images']) as $image)
        <div class="item col-sm-6 col-md-4 mb-3">
            <a href="{{'/images/' . $image}}" class="fancybox" data-fancybox="gallery1">
                <img src="{{'/images/' . $image}}" width="100%" height="100%">
            </a>
        </div>
    @endforeach
    </div>
</div>


            <div about-room>
                <div class="btn-container">
                    <ul class="nav nav-tabs nav-room" role="tablist" style="flex-wrap: nowrap">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#info"><i class="fas fa-info-circle"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#basic">Basic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#map">Map</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#available">Request rental</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#reviews">Reviews</a>
                        </li>
                    </ul>


                    <div class="tab-content">
                        <div id="info" class="container tab-pane active"><br>
                            <h3>{{$listing['name']}}</h3>
                            <p>{{$listing['description']}}</p>
                            <p>Price/month: {{$listing['price']}} ???</p>
                        </div>
                        <div id="basic" class="container tab-pane fade"><br>
                            <div class="row">
                                <div class="basic-lista">
                                    <h3>Basic infomation</h3>
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
                            <h3></h3>
                            <div class="row">

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
                        <div id="available" class="container tab-pane fade"><br>
                            <div class="row">
        <div class="col-md-4">
          <div class="card pricing-card pricing-plan-basic">
            <div class="card-body">
              <i class="mdi mdi-cube-outline pricing-plan-icon"></i>
              <p class="pricing-plan-title">Basic</p>
              <h4 class="pricing-plan-cost ml-auto">$3</h3>
              <ul class="pricing-plan-features">
                <li>5 rental requests</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
            <div class="card-body">
                <i class="mdi mdi-trophy pricing-plan-icon"></i>
              <p class="pricing-plan-title">Regular</p>
              <h4 class="pricing-plan-cost ml-auto">$5</h3>
              <ul class="pricing-plan-features">
                <li>10 rental requests</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pricing-card pricing-plan-enterprise">
            <div class="card-body">
              <i class="mdi mdi-wallet-giftcard pricing-plan-icon"></i>
              <p class="pricing-plan-title">Pro</p>
              <h4 class="pricing-plan-cost ml-auto">$7</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited rental requests</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
      </div>


                           <!-- <div class="calendar">

                                <div class='ime-mjeseca'>

                                    <h2>September</h2>

                                    <a class="btn-prev " href="#"><i class="fas fa-arrow-left"></i></a>
                                    <a class="btn-next " href="#"><i class="fas fa-arrow-right"></i></a>

                                </div>

                                <table>

                                    <thead>

                                        <tr>

                                            <td>Mo</td>
                                            <td>Tu</td>
                                            <td>We</td>
                                            <td>Th</td>
                                            <td>Fr</td>
                                            <td>Sa</td>
                                            <td>Su</td>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="prev-month">26</td>
                                            <td class="prev-month">27</td>
                                            <td class="prev-month">28</td>
                                            <td class="prev-month">29</td>
                                            <td class="prev-month">30</td>
                                            <td class="prev-month">31</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td class="next-month">1</td>
                                            <td class="next-month">2</td>
                                            <td class="next-month">3</td>
                                            <td class="next-month">4</td>
                                            <td class="next-month">5</td>
                                            <td class="next-month">6</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>-->


                        </div>
                        <div id="reviews" class="container tab-pane fade"><br>

                            <h3>Write your review:</h3>
                            <div class="row rev">
                                <div class="col-md-6">
                                    <div class=" row form-group blue-border">
                                        <textarea class="form-control" id="Textarea" rows="5"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="rating2 col-md-6">
                                            <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2"><i class="fas fa-star"></i></label>
                                            <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1"><i class="fas fa-star"></i></label>
                                        </div>
                                        <div class="col-md-6" style="padding:10px 0px;">
                                            <input type="button" id="reviewButton" class="mybutton" style="display:block" value="Submit"></input>        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12 review-box">
                                        <div class="profili"><img src="/img/cura.jpg" alt="cura">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus iste nesciunt ad vitae commodi, voluptatibus velit id voluptas itaque provident aliquid.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

   

    <div class="container-fluid px-0">
        <h2 style="text-transform: uppercase; font-weight:bold;">Explore the Area</h2>
        <div id="viewDiv2" class="karta2">
        </div>
    </div>

    

</section>
<section class="footer">
        <div class="container-fluid">
            <div class="row" style="justify-content:center; padding-left:250px !important">
                <div class="col-md-3 footer-link">
                    <h6>About</h6>
                    <div>
                        <a href="/accommodation">
                            Accommodation
                        </a>
                    </div>
                    <div>
                        <a href="/list">
                            Host your property
                        </a>
                    </div>
                    <div>
                        <a href="/quiz">
                            Quiz
                        </a>
                    </div>
                    <div>
                        <a href="/quiz">
                            Get to know Croatian regions
                        </a>
                    </div>
                </div>
                <div class="col-md-6 footer-link" style="text-align:center !important;">
                    <h6>Social media</h6>
                    <p><i class="fab fa-facebook-square"></i> <i class="fab fa-instagram"></i> <i class="fab fa-pinterest-square"></i></p>
                </div>
                <div class="col-md-3 footer-link">
                    <h6>Policies</h6>
                    <div>
                        <a href="#">
                            Cookie policy
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            Privacy policy
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            Advertising policy
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" style="justify-content:center;">
                <div class="col-md-3">
                    <a class="footer-logo" href="/">
                        <img src="img/logo3.png" alt="Logo" style="width: 60px; height: 65px; ">
                    </a>
                    <p><i class="far fa-copyright" style="font-size: 15px;"></i> 2021 Remote Home</p>
                </div>
            <div>
        </div>
    </section>
@endsection
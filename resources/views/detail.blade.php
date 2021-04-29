@extends('master')
@section("content")
<section class="room">

        <div class="container room-container">

            <div class="back">
                <a href="Accommodation.html"><button type="button" class="btn btn-outline-primary"><i class="fas fa-angle-double-left"></i> back</button></a>
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
                                <img src="{{'images/' . $image}}" alt="apartman5">
                            </div>
                        @endforeach
                            <!--<div class="carousel-item">
                                <img src="img/apartman52.jpg" alt="mapartman5">
                            </div>
                            <div class="carousel-item">
                                <img src="img/apartman53.jpg" alt="apartman5">
                            </div>-->
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
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#available">Available</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#reviews">Reviews</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->

                        <div class="tab-content">
                            <div id="info" class="container tab-pane active"><br>
                                <h3>{{$listing['name']}}</h3>
                                <p>{{$listing['description']}}</p>
                                <p>Price/month: {{$listing['price']}} €</p>
                                <div class="row room-icon">
                                    <div class="col-md-12">
                                        <form action="/favourite" method="POST" style="display:inline">
                                        @csrf
                                            <input type="hidden" name="listing_id" value={{$listing['id']}}>
                                            <button type="submit" class="btn btn-light"><i class="far fa-bookmark"></i></button>
                                        </form>
                                            <button type="button" class="btn btn-light"><i class="fas fa-book"></i></button>
                                            <button type="button" class="btn btn-light"><i class="fas fa-phone"></i></button>
                                    </div>
                                </div>
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
                                        <h3>Expences</h3>
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
                                <div class="row room-icon">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-light"><i class="far fa-bookmark"></i></button>
                                        <button type="button" class="btn btn-light"><i class="fas fa-book"></i></button>
                                        <button type="button" class="btn btn-light"><i class="fas fa-phone"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div id="map" class="container tab-pane fade"><br>
                                <h3>Location</h3>
                                <div class="row karta2">
                                    <div class="md-6 "> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90028.43672660251!2d17.928481943554683!3d45.15897924565657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475dba0125e6cc57%3A0xa99cb4401b060ad5!2sSlavonski%20Brod!5e0!3m2!1sen!2shr!4v1618959390818!5m2!1sen!2shr"
                                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        <div class="row room-icon">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-light"><i class="far fa-bookmark"></i></button>
                                                <button type="button" class="btn btn-light"><i class="fas fa-book"></i></button>
                                                <button type="button" class="btn btn-light"><i class="fas fa-phone"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="available" class="container tab-pane fade"><br>
                                <h3>Available</h3>
                                <section class="col-sm-12">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                    <span class="calendar"><i class="far fa-calendar-alt"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row room-icon">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-light"><i class="far fa-bookmark"></i></button>
                                            <button type="button" class="btn btn-light"><i class="fas fa-book"></i></button>
                                            <button type="button" class="btn btn-light"><i class="fas fa-phone"></i></button>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div id="reviews" class="container tab-pane fade"><br>
                                <h3>Reviews</h3>
                                <div class="row" style="justify-content: center; margin: 10px 20px;">
                                    <div class="col-md-12 review-box">
                                        <div class="profili"><img src="img/cura.jpg" alt="cura">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>Voluptates eveniet magnam eos distinctio sequi excepturi, architecto vel corporis. Illum suscipit voluptatum corporis debitis repudiandae praesentium harum. Pariatur ipsam corporis rerum!</p>
                                    </div>
                                    <div class="col-md-12 review-box">
                                        <div class="profili"><img src="img/decko.jpg" alt="decko">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus iste nesciunt ad vitae commodi, voluptatibus velit id voluptas itaque provident aliquid, aperiam accusantium illum reprehenderit iusto.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
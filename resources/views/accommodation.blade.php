@extends('master')
@section("content")
<nav class="navbar navbar-expand-sm navbar-dark sticky-top">

        <div class="container">
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
                <div class="col-md-3">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                            <a href="Room.html">
                                <h5>Room in Slavonski Brod</h5>
                            </a>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi debitis voluptas molestiae, consequatur nesciunt asperiores itaque vel.</p>
                            </div>
                            <img src="img/apartman5.jpg" alt="house">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                            <a href="#">
                                <h5>House in Umag</h5>
                            </a>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi debitis voluptas molestiae, consequatur nesciunt asperiores itaque vel.</p>
                            </div>
                            <img src="img/bazen.jpg" alt="house">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                            <a href="#">
                                <h5>Flat in Novalja</h5>
                            </a>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi debitis voluptas molestiae, consequatur nesciunt asperiores itaque vel.</p>
                            </div>
                            <img src="img/apartman4.jpg" alt="house">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                            <a href="#">
                                <h5>Boat from Zadar</h5>
                            </a>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi debitis voluptas molestiae, consequatur nesciunt asperiores itaque vel.</p>
                            </div>
                            <img src="img/jahta.jpg" alt="house">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                            <a href="#">
                                <h5>Cottage in Ogulin</h5>
                            </a>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi debitis voluptas molestiae, consequatur nesciunt asperiores itaque vel.</p>
                            </div>
                            <img src="img/farma.jpg" alt="house">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                            <a href="#">
                                <h5>Flat in Zagreb</h5>
                            </a>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi debitis voluptas molestiae, consequatur nesciunt asperiores itaque vel.</p>
                            </div>
                            <img src="img/kuca4.jpg" alt="house">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                            <a href="#">
                                <h5>House in Split</h5>
                            </a>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi debitis voluptas molestiae, consequatur nesciunt asperiores itaque vel.</p>
                            </div>
                            <img src="img/bazen2.jpg" alt="house">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smjestaj-box">
                        <div class="smjestaj-opis">
                            <a href="#">
                                <h5>Co-living in Požega</h5>
                            </a>
                        </div>
                        <div class="smjestaj-img">
                            <div class="infor">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi debitis voluptas molestiae, consequatur nesciunt asperiores itaque vel.</p>
                            </div>
                            <img src="img/dnevni5.jpg" alt="house">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="padding-top: 40px;">
                    <a href="#">
                        <p>Privacy Policy</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <p><i class="fas fa-square-full"></i> <i class="fas fa-square-full"></i> <i class="fas fa-square-full"></i></p>
                    <p>2021</p>
                </div>
                <div class="col-md-4" style="padding-top: 40px;">
                    <a href="">
                        <a href="#">
                            <p>Contact</p>
                        </a>
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection
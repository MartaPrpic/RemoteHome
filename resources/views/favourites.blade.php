@extends('master')
@section("content")
<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}?>
<div class="header">
    <nav class="navbar navbar-expand-sm sticky-top">
        <!--promjenila u container-fluid-->
        <div class="container-fluid ">
            <a class="navbar-brand" href="/">
                <!--makla style komponentu iz img jer sam je prebacila u css-->
                <!--u svaki li dodala nav-element klasu-->
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
                        <!--dodala dropdown-menu-right komponentu-->
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


<section class="favoriti">
    <div class="container">
        <h2>Your saved listings</h2>
        @foreach($favourites as $listing)
            <div class="row">
                <div class="col-l-6" id="{{$listing->id}}">
                    <a href="detail/{{$listing->id}}">
                        <div class="favorit">
                            <img name="img">
                                <?php 
                                    $index = $loop->index;
                                    console_log($index);
                                ?>
                                <script>
                                    var i = <?php echo $loop->index ?>;
                                    var img = <?php echo json_decode($listing->images)?>;
                                    console.log(img);
                                    var domImg = Array.from(document.getElementsByName('img'));
                                    domImg[i].src= `images/${img[0]}`;
                                </script>
                            <div class="favorit-body">
                                <h5>{{$listing->name}}</h5>
                                <p>{{$listing->description}}</p>
                                <a href="/removefav/{{$listing->favourites_id}}"> <i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
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
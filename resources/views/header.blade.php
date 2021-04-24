<!--<div class="header">-->

        <nav class="navbar navbar-expand-sm sticky-top">

            <div class="container">

                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo" style="width: 75px; height: 60px; padding-left: 20px;">
                </a>

                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse " id="collapsibleNavbar">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="Accommodation.html">Accommodation</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Language
                    </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Croatian <img src="img/hrv.png" style="width: 15px; height: 15px;"></a>
                                <a class="dropdown-item" href="#">English  <img src="img/eng.png" style="width: 15px; height: 15px;"></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Currency
                    </a>
                        <li>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">EURO <i class="fas fa-euro-sign"></i></a>
                                <a class="dropdown-item" href="#">USD <i class="fas fa-dollar-sign"></i></a>
                                <a class="dropdown-item" href="#">HRK</a>
                            </div>
                        </li>
                        @if(Session::has('user'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-secondary btn-login" type="button" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">Messages</a>
                                <a class="dropdown-item" href="">Favourites</a>
                                <a class="dropdown-item" href="">Reservations</a>
                                <a class="dropdown-item" href="">Personal</a>
                                <a class="dropdown-item" href="">Settings</a>
                                <a class="dropdown-item" href="">Contact</a>
                                <a class="dropdown-item" href="">Privacy Policy</a>
                                <a class="dropdown-item" href="/logout">Log out</a>
                                <a class="dropdown-item" href="/list">Host your property</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-secondary btn-login" type="button" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/login">Login</a>
                                <a class="dropdown-item" href="/register">Register</a>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!--<div class="container">

            <h1>Accommodation for Digital Nomads in Croatia</h1>

        </div>
</div>-->
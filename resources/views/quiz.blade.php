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
                    <!--<li class="nav-item dropdown nav-element">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Language
                </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Croatian <img src="img/hrv.png" style="width: 15px; height: 15px;"></a>
                            <a class="dropdown-item" href="#">English  <img src="img/eng.png" style="width: 15px; height: 15px;"></a>
                        </div>
                    </li> -->
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


    <div id="container" class="container" id="quiz">
        <div id="question-container">
            <div id="sections" class="interesi">
                <div id="interests" style="display:block" class="quiz-card">
                    <h3>1. Choose your interests</h3>
                    <div class="row">
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c1" class="hidden"><label for="c1">Agriculture</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c2" class="hidden"><label for="c2">Farms</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c3" class="hidden"><label for="c3">Fishing</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c4" class="hidden"><label for="c4">Climbing</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c5" class="hidden"><label for="c5">Bycicling</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c6" class="hidden"><label for="c6">Swimming</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c8" class="hidden"><label for="c8">Student life</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c7" class="hidden"><label for="c7">City lifestyle</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c9" class="hidden"><label for="c9">Beautiful nature</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c10" class="hidden"><label for="c10">Beaches</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c11" class="hidden"><label for="c11">Beautiful parks</label></div>
                        <div class="col-sm-2 interes"><input type="checkbox" name="interest" id="c12" class="hidden"><label for="c12">Peacefull living</label></div>
                    </div>
                </div>
                <div id="clime" class="klima quiz-card">
                    <h3>2. Clime</h3>
                    <h6>Summer average max temperature:</h6>
                    <input type="radio" name="summerTemp" class="hidden" id="r1"><label for="r1">32??C</label>
                    <input type="radio" name="summerTemp" class="hidden" id="r2"><label for="r2">30??C</label>
                    <input type="radio" name="summerTemp" class="hidden" id="r3"><label for="r3">25??C</label>
                    <input type="radio" name="summerTemp" class="hidden" id="r4"><label for="r4">15??C</label>

                    <h6>Winter average min temperature:</h6>
                    <input type="radio" class="hidden" name="winterTemp" id="r5"><label for="r5">5??C</label>
                    <input type="radio" class="hidden" name="winterTemp" id="r6"><label for="r6">0??C</label>
                    <input type="radio" class="hidden" name="winterTemp" id="r7"><label for="r7">-2??C</label>
                    <input type="radio" class="hidden" name="winterTemp" id="r8"><label for="r8">-10??C</label>

                    <h6>How important it is for you that there is no wind?</h6>
                    <div id="sliderContainer1">
                        <div style="overflow: hidden">
                            <p style="float: left">Not at all</p>
                            <p style="float: right">Very</p>
                        </div>
                        <div class="">
                            <div class="slider-container">
                                <span class="bar"><span class="fill"></span></span>
                                <input id="slider1" class="slider" type="range" min="0" max="2" value="1" style="width: 100%;">
                            </div>
                        </div>
                    </div>

                    <h6>How important it is for you that it is very sunny?</h6>
                    <div id="sliderContainer2">
                        <div style="overflow: hidden">
                            <p style="float: left">Not at all</p>
                            <p style="float: right">Very</p>
                        </div>
                        <div class="">
                            <div class="slider-container">
                                <span class="bar"><span class="fill"></span></span>

                                <input id="slider2" class="slider" type="range" min="0" max="2" value="1" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="areaType" class="area quiz-card">
                    <h3>3. Area type and Population</h3>
                    <div class="row">

                        <div class="col-md-6 area1"><input class="hidden" type="checkbox" name="areaType" id="a1"><label for="a1">Lowland</label></div>
                        <div class="col-md-6 area1"><input class="hidden" type="checkbox" name="areaType" id="a2"><label for="a2">Highland</label></div>
                        <div class="col-md-6 area1"><input class="hidden" type="checkbox" name="areaType" id="a3"><label for="a3">Lowland and highland</label></div>
                        <div class="col-md-6 area1"><input class="hidden" type="checkbox" name="areaType" id="a4"><label for="a4">Mountains</label></div>
                    </div>
                    <div id="sliderContainer3">
                        <div style="overflow: hidden">
                            <p style="float: left">Low</p>
                            <p style="float: right">High</p>
                        </div>
                        <div class="">
                            <div class="slider-container">
                                <span class="bar"><span class="fill"></span></span>
                                <input id="slider3" class="slider" type="range" min="0" max="2" value="1" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="food" class="area quiz-card">
                    <h3>4. Food</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="checkbox" class="hidden" name="cbk" id="Slavonija and Baranja"><label for="Slavonija and Baranja"><img class="food" src="/img/??obi.jpg"></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" class="hidden" name="cbk" id="Dalmatia"><label for="Dalmatia"><img class="food" src="/img/riba.jpg"></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" class="hidden" name="cbk" id="Lika and Gorski kotar"><label for="Lika and Gorski kotar"><img class="food" src="/img/grah.jpg"></label>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" class="hidden" name="cbk" id="Central part"><label for="Central part"><img class="food" src="/img/purica.jpg"></label>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!--class smjer-->
            <div id="nav-btns" class="row" style="margin:100px auto 150px auto;">
                <input type="button" style="margin:0 auto !important" class="mybutton" value="Finish" id="finish"></input>
            </div>
        </div>
    </div>
    <div id="rezultat" style="display:none;">
        <div class="quizKarta" id="viewDiv3">
        </div>
        <div class="rezultaat">
            <div id="resultWrapper">
                <h4>Your suited region would be: </h4>
                <p id="ime"></p>
                <div style="height:1px; background-color: rgba(241, 241, 241); width:80%; margin:0 auto;"></div>
                <div>
                    <p style="font-size: 22px !important; padding: 30px 60px; text-align: left !important; color: #b0b0b0;">Now when you've found your suited region you can start looking for the perfect accomodation</p>
                    <h4 style="padding-top:0px !important; font-weight:bold;">Start your search here</h4>
                </div>
                <a href="/accommodation"><button class="quiz-acc">Search accommodation</button></a>    
            </div>
            <div id="redirect">
                
                <h4 class="quiz-call">Not sure yet and want to get to know it better?</h4>
                <a href="https://croatia.hr/en-GB/Destinations/Regions" target="_blank" rel="noopener noreferrer"><button class="mybutton">Click here</button></a><br>
            
            </div>
        </div>
    </div>

    <!--<div style="display:none;" id="rezultat" class="rezultat">
                <div class="row" style="100vh !important;">
                    <div id="result" class="col-lg-6">
                        <h3>Your suited region would be: </h3>
                        <p id="ime">IME</p>
                        <a href="/accommodation"><button class="quiz-acc">Search accommodation</button></a>
                        <p class="quiz-call">Not sure yet and want to get to know it better?</p>
                        <a href="https://croatia.hr/en-GB/Destinations/Regions" target="_blank" rel="noopener noreferrer"><button class="quiz-button btn btn-outline">Click here</button></a><br>
                    </div>
                    <div id="" height="100vh;" style="border:1 solid black;" class="col-lg-6"></div>
                </div>
            </div>-->
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

    <script>
        let regije = [{
                ime: "Slavonija and Baranja",
                summerTemp: "30",
                winterTemp: "-2",
                wind: "very",
                sun: "middle",
                areaType: "lowland",
                population: "middle",
                description: ["hospitals", "good wifi", "agriculture", "farms", "peacefull living", "city lifestyle", "bicycling", "beautiful parks", "student city"],
                points: 0
            },

            {
                ime: "Lika and Gorski Kotar",
                summerTemp: "15",
                winterTemp: "-10",
                wind: "not at all",
                sun: "low",
                areaType: "mountains",
                population: "low",
                description: ["farms", "peacefull living", "climbing", "beautiful nature", "fishing"],
                points: 0
            }, {
                ime: "Central part",
                summerTemp: "25",
                winterTemp: "0",
                wind: "middle",
                sun: "middle",
                areaType: "lowland and highland",
                population: "high",
                description: ["hospitals", "good wifi", "climbing", "historical buildings", "city lifestyle", "beautiful parks", "student city"],
                points: 0
            }, {
                ime: "Istra and Kvarner",
                summerTemp: "30",
                winterTemp: "5",
                wind: "not at all",
                sun: "very",
                areaType: "lowland and highland",
                population: "middle",
                description: ["hospitals", "peacefull living", "good wifi", "fishing", "climbing", "historical buildings", "city lifestyle", "beautiful beaches", "student city"],
                points: 0
            }, {
                ime: "Dalmatia",
                summerTemp: "32",
                winterTemp: "5",
                wind: "not at all",
                sun: "very",
                areaType: "lowland",
                population: "middle",
                description: ["hospitals", "beautiful beaches", "beautiful nature", "good wifi", "agriculture", "historical buildings", "city lifestyle", "peacefull living", "student city", ],
                points: 0
            }, {
                ime: "Islands",
                summerTemp: "30",
                winterTemp: "5",
                wind: "not at all",
                sun: "very",
                areaType: "lowland",
                population: "low",
                description: ["beautiful nature", "beautiful beaches", "peacefull living", "fishing", "agriculture"],
                points: 0
            }
        ];

        /*let start = document.getElementById("quiz-btn");*/
        let next = document.getElementById("next");
        let sections = document.getElementById("sections");
        let finish = document.getElementById("finish");
        let buttons = document.getElementById("nav-btns");
        let rezultat = document.getElementById("ime");
        let numOfSections = sections.childElementCount;
        let userInput = {
            summerTemp: null,
            winterTemp: null,
            wind: null,
            sun: null,
            areaType: [],
            population: null,
            description: [],
            food: []
        };
        let sectionsArray = Array.from(sections.children);
        let currentPage = 0;
        console.log(sections);

        /*start.addEventListener('click', function(e) {
            e.preventDefault();
            sections.firstElementChild.style.display = "block";
            document.getElementById("question-container").style.display = "block";
            document.getElementById("hello").style.display = "none";
            back.style.display = "none";
            finish.style.display = "none";

        })

        next.addEventListener("click", function(e) {
            e.preventDefault();
            back.style.display = "inline";
            if (currentPage == 2) {
                next.style.display = "none";
                finish.style.display = "inline";
            } else {
                next.style.display = "inline";
                finish.style.display = "none";
            }
            if (sections.children[currentPage].style.display == "block") {
                sections.children[currentPage].style.display = "none";
                sections.children[currentPage + 1].style.display = "block";
            }
            currentPage++;
        })

        back.addEventListener("click", function(e) {
            e.preventDefault();
            if (currentPage == 3) {
                next.style.display = "inline";
                finish.style.display = "none";
            }
            if (sections.children[currentPage].style.display == "block") {
                if (sections.children[1].style.display == "block") {
                    back.style.display = "none";
                } else {
                    back.style.display = "inline";
                }
                sections.children[currentPage].style.display = "none";
                sections.children[currentPage - 1].style.display = "block";
            }
            currentPage--;
        })*/

        finish.addEventListener("click", function(e) {
            e.preventDefault();
            buttons.style.display = "none";
            sections.style.display= "none";
            Array.from(document.getElementById("interests").children).forEach(function(check) {
                if (check.checked) userInput.description.push(check.nextElementSibling.innerHTML);
            });
            Array.from(document.getElementsByName("summerTemp")).forEach(function(radio) {
                if (radio.checked) userInput.summerTemp = (radio.nextElementSibling.innerHTML).toString();
            });
            Array.from(document.getElementsByName("winterTemp")).forEach(function(radio) {
                if (radio.checked) userInput.winterTemp = (radio.nextElementSibling.innerHTML).toString();
            });
            if (document.getElementById("slider1").value == 1) userInput.wind = "middle";
            else if (document.getElementById("slider1").value == 2) userInput.wind = "very";

            if (document.getElementById("slider2").value == 1) userInput.sun = "middle";
            else if (document.getElementById("slider2").value == 2) userInput.sun = "very";

            Array.from(document.getElementsByName("areaType")).forEach(function(check) {
                if (check.checked) userInput.areaType.push(check.nextElementSibling.innerHTML);
            });
            if (document.getElementById("slider3").value == 0) userInput.population = "low";
            else if (document.getElementById("slider3").value == 1) userInput.population = "middle";
            else if (document.getElementById("slider3").value == 2) userInput.population = "very";

            Array.from(document.getElementsByName("cbk")).forEach(function(check, i){
                if(check.checked){userInput.food.push(check.id)};
                if(check.id == "Dalmatia" && check.checked){userInput.food.push("Islands", "Istra and Kvarner")};
            })

            console.log(userInput);
            let usporedi = function(userInput, regije) {
                for (let i = 0; i < regije.length; i++) {
                    for (let j = 0; j < userInput.description.length; j++) {
                        if (regije[i].description.includes(userInput.description[j])) regije[i].points++
                    }
                    for (let k = 0; k < userInput.areaType.length; k++) {
                        if (regije[i].areaType.includes(userInput.areaType[k])) regije[i].points++
                    }
                    for (let l = 0; l < userInput.food.length; l++) {
                        if(userInput.food.includes(regije[i].ime)) regije[i].points++;
                    }
                    if (regije[i].population.includes(userInput.population)) regije[i].points++;
                    if (regije[i].summerTemp.includes(userInput.summerTemp)) regije[i].points++;
                    if (regije[i].winterTemp.includes(userInput.winterTemp)) regije[i].points++;
                    if (regije[i].wind.includes(userInput.wind)) regije[i].points++;
                    if (regije[i].sun.includes(userInput.sun)) regije[i].points++;
                }
            }
            usporedi(userInput, regije);
            regije.forEach(regija=>console.log(`${regija.ime} = ${regija.points}`));
            let getResult = function() {
                regije.sort(function(regijaA, regijaB) {
                    return regijaB.points - regijaA.points
                });
                document.getElementById("rezultat").style="display:flex;"
                let result = [];
                let maxPoints = regije[0].points;
                result = regije.filter(regija => regija.points == maxPoints);
                console.log(result[0]);
                rezultat.innerHTML = result[0].ime;
            };

            getResult();

        })

        let $slider = $("#slider");
        let $fill = $(".bar .fill");

        function setBar() {
            $fill.css("width", $slider.val() + "%");
        }

        $slider.on("input", setBar);

        setBar();
    </script>

</body>
@endsection
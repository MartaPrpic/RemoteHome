@extends('master')
@section("content")
<script>
    
    let regije= [
    {
        ime : "Slavonija and Baranja",
        summerTemp : "30",
        winterTemp : "-2",
        wind : "very",
        sun : "middle",
        areaType : "lowland",
        population : "middle",
        description : ["hospitals", "good wifi", "agriculture", "farms", "peacefull living", "city lifestyle", "bicycling", "beautiful parks", "student city"],
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
    },
    {
        ime: "Central part",
        summerTemp: "25",
        winterTemp: "0",
        wind: "middle",
        sun: "middle",
        areaType: "lowland and highland",
        population: "high",
        description: ["hospitals", "good wifi", "climbing", "historical buildings", "city lifestyle", "beautiful parks", "student city"],
        points: 0
    },
    {
        ime: "Istra and Kvarner",
        summerTemp: "30",
        winterTemp: "5",
        wind: "not at all",
        sun: "very",
        areaType: "lowland and highland",
        population: "middle",
        description: ["hospitals", "peacefull living", "good wifi", "fishing", "climbing", "historical buildings", "city lifestyle", "beautiful beaches", "student city"],
        points: 0
    },
    {
        ime: "Dalmatia",
        summerTemp: "32",
        winterTemp: "5",
        wind: "not at all",
        sun: "very",
        areaType: "lowland",
        population: "middle",
        description: ["hospitals","beautiful beaches", "beautiful nature", "good wifi", "agriculture", "historical buildings", "city lifestyle", "peacefull living", "student city",],
        points: 0
    },
    {
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

    let start = document.getElementById("quiz-btn");
    let next = document.getElementById("next");
    let sections = document.getElementById("sections");
    let finish = document.getElementById("finish");
    let buttons = document.getElementById("nav-btns");
    let numOfSections = sections.childElementCount;
    let userInput = {
    summerTemp: null,
    winterTemp: null,
    wind: null,
    sun: null,
    areaType: [],
    population: null,
    description: []
    };
    let sectionsArray = Array.from(sections.children);
    let currentPage = 0;
    sectionsArray.forEach( section => section.style.display = "none");
    console.log(sections);

    start.addEventListener('click',  function(e){
    e.preventDefault();
    sections.firstElementChild.style.display = "block";
    document.getElementById("question-container").style.display ="block";
    document.getElementById("hello").style.display = "none";
    back.style.display = "none";
    finish.style.display = "none";

    })

    next.addEventListener("click", function(e){
    e.preventDefault();
    back.style.display = "inline";
        if( currentPage == 2){
            next.style.display = "none";
            finish.style.display = "inline";
        }else { next.style.display = "inline";
            finish.style.display ="none";}
        if(sections.children[currentPage].style.display == "block") {
            sections.children[currentPage].style.display = "none";
            sections.children[currentPage+1].style.display ="block";
        }
        currentPage++;
    })

    back.addEventListener("click", function(e){
    e.preventDefault();
        if(currentPage == 3) {next.style.display = "inline"; finish.style.display ="none";}
        if(sections.children[currentPage].style.display == "block") {
            if (sections.children[1].style.display == "block"){
                back.style.display = "none";
            }else {back.style.display = "inline";}
            sections.children[currentPage].style.display = "none";
            sections.children[currentPage-1].style.display ="block";
        }
    currentPage--;
    })

    finish.addEventListener("click", function(e){
    e.preventDefault();
    buttons.style.display = "none";
    Array.from(document.getElementById("interests").children).forEach(function(check){
        if (check.checked) userInput.description.push(check.nextElementSibling.innerHTML);
    });
    Array.from(document.getElementsByName("summerTemp")).forEach(function(radio){
        if(radio.checked) userInput.summerTemp = (radio.nextElementSibling.innerHTML).toString();
    });
    Array.from(document.getElementsByName("winterTemp")).forEach(function(radio){
        if(radio.checked) userInput.winterTemp = (radio.nextElementSibling.innerHTML).toString();
    });
    if(document.getElementById("slider1").value == 1) userInput.wind = "middle";
    else if (document.getElementById("slider1").value == 2) userInput.wind = "very";

    if(document.getElementById("slider2").value == 1) userInput.sun = "middle";
    else if (document.getElementById("slider2").value == 2) userInput.sun = "very";

    Array.from(document.getElementsByName("areaType")).forEach(function (check){
        if(check.checked) userInput.areaType.push(check.nextElementSibling.innerHTML);
    });
    if(document.getElementById("slider3").value == 0) userInput.population = "low";
    else if (document.getElementById("slider3").value == 1) userInput.population = "middle";
    else if (document.getElementById("slider3").value == 2) userInput.population = "very";

    console.log(userInput);
    let usporedi = function(userInput, regije){
        for( let i = 0; i < regije.length; i++){
            for ( let j = 0; j < userInput.description.length; j++){
                    if(regije[i].description.includes(userInput.description[j])) regije[i].points++
            }
            for( let k =0; k < userInput.areaType.length; k++){
                if(regije[i].areaType.includes(userInput.areaType[k])) regije[i].points++
            }
            if(regije[i].population.includes(userInput.population)) regije[i].points++;
            if(regije[i].summerTemp.includes(userInput.summerTemp)) regije[i].points++;
            if(regije[i].winterTemp.includes(userInput.winterTemp)) regije[i].points++;
            if(regije[i].wind.includes(userInput.wind)) regije[i].points++;
            if(regije[i].sun.includes(userInput.sun)) regije[i].points++;
        }
    }
    usporedi(userInput, regije);

    let getResult = function(){
        regije.sort(function(regijaA,regijaB){ return regijaB.points-regijaA.points});
        let result = [];
        let maxPoints = regije[0].points;
        result = regije.filter(regija => regija.points == maxPoints);
        result.forEach(regija => document.getElementById("result").innerHTML += regija.ime)
    }

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
<div id="container" class="container" id="quiz">
        <div id="hello" style="">
            <h3>Find out what region of Croatia suits you</h3>
            <button id="quiz-btn">Take a quiz</button>
        </div>
        <div id="question-container" style="display:none">
            <div id="sections">
                <div id="interests" style="display:block">
                    <h3>Choose your interests</h3>
                    <input type="checkbox" name="interest" id="c1"><label for="c1">agriculture</label>
                    <input type="checkbox" name="interest" id="c2"><label for="c2">farms</label>
                    <input type="checkbox" name="interest" id="c3"><label for="c3">fishing</label>
                    <input type="checkbox" name="interest" id="c4"><label for="c4">climbing</label>
                    <input type="checkbox" name="interest" id="c5"><label for="c5">bycicling</label>
                    <input type="checkbox" name="interest" id="c6"><label for="c6">climbing</label>
                    <input type="checkbox" name="interest" id="c7"><label for="c7">city lifestyle</label>
                    <input type="checkbox" name="interest" id="c8"><label for="c8">student life</label>
                    <input type="checkbox" name="interest" id="c9"><label for="c9">beautiful nature</label>
                    <input type="checkbox" name="interest" id="c10"><label for="c10">beautiful beaches</label>
                    <input type="checkbox" name="interest" id="c11"><label for="c11">beautiful parks</label>
                    <input type="checkbox" name="interest" id="c12"><label for="c12">peacefull living</label>
                </div>
                <div id="clime" style="display:none">
                    <h3>Clime</h3>
                    <p>Summer average max temperature:</p>
                    <input type="radio" name="summerTemp" id="r1"><label for="r1">32</label>
                    <input type="radio" name="summerTemp" id="r2"><label for="r2">30</label>
                    <input type="radio" name="summerTemp" id="r3"><label for="r3">25</label>
                    <input type="radio" name="summerTemp" id="r4"><label for="r4">15</label>

                    <p>Winter average min temperature:</p>
                    <input type="radio" name="winterTemp" id="r5"><label for="r5">5</label>
                    <input type="radio" name="winterTemp" id="r6"><label for="r6">0</label>
                    <input type="radio" name="winterTemp" id="r7"><label for="r7">-2</label>
                    <input type="radio" name="winterTemp" id="r8"><label for="r8">-10</label>

                    <p>How important it is for you that there is no wind?</p>
                    <div id="sliderContainer1">
                        <div style="overflow: hidden">
                            <p style="float: left">Not at all</p>
                            <p style="float: right">Very</p>
                        </div>
                        <div class="">
                            <div class="slider-container">
                                <span class="bar"><span class="fill"></span></span>
                                <input id="slider1" class="slider" type="range" min="0" max="2" value="1">
                            </div>
                        </div>
                    </div>

                    <p>How important it is for you that it is very sunny?</p>
                    <div id="sliderContainer2">
                        <div style="overflow: hidden">
                            <p style="float: left">Not at all</p>
                            <p style="float: right">Very</p>
                        </div>
                        <div class="">
                            <div class="slider-container">
                                <span class="bar"><span class="fill"></span></span>
                                <input id="slider2" class="slider" type="range" min="0" max="2" value="1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="areaType">
                    <p>Area type</p>
                    <input type="checkbox" name="areaType" id="a1"><label for="a1">lowland</label>
                    <input type="checkbox" name="areaType" id="a2"><label for="a2">highland</label>
                    <input type="checkbox" name="areaType" id="a3"><label for="a3">lowland and highland</label>
                    <input type="checkbox" name="areaType" id="a4"><label for="a4">mountains</label>

                    <p>Population</p>
                    <div id="sliderContainer3">
                        <div style="overflow: hidden">
                            <p style="float: left">Low</p>
                            <p style="float: right">High</p>
                        </div>
                        <div class="">
                            <div class="slider-container">
                                <span class="bar"><span class="fill"></span></span>
                                <input id="slider3" class="slider" type="range" min="0" max="2" value="1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="food">

                </div>
            </div>
            <div id="nav-btns" style="">
                <a href="" id="back">back</a>
                <a href="" id="skip">skip</a>
                <a href="" id="next">next</a>
                <a href="" id="finish">finish</a>
            </div>
        </div>
    </div>
    <div id = "result"></div>
@endsection
@extends('master')
@section("content")
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
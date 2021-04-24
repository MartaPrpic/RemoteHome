@extends('master')
@section("content")

    <!--<div class="oglas-nav">
        <nav class="navbar navbar-expand-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo" style="width: 75px; height: 60px; padding-left: 20px;">
                </a>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="User.html"><i class="fas fa-user-circle"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>-->

    <section class="oglas">
        <div class="container">
            <h4> Host Your Home</h4>

            <div class="row oglas-okvir">
                <div class="col-md-6">
                    <form method="POST" action="list" enctype="multipart/form-data" id="list">
                    @csrf
                        <div class="oglas-basic">
                            <select id="category" name="category" class="custom-select">
                              <option selected>Category</option>
                              <option id="shared" value="Shared property">Shared property</option>
                              <option value="Flat">Flat/Apartment</option>
                              <option value="Rustic">Rustic or traditional home</option>
                              <option value="House">House</option>
                            </select>
                            <select id="type" name="type" class="custom-select" style="display:none">
                                <option selected>Type</option>
                                <option value="Room">Room</option>
                                <option value="Boat">Boat</option>
                                <option value="Co-living">Co-living</option>
                            </select>
                        </div>
                        <div class="oglas-basic">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Title">
                            <input type="text" name="address" id="address" class="form-control" placeholder="City">
                            <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="oglas-basic">
                            <!--<div class="imageupload-container">
                                <div class="imageupload-wrapper">
                                    <div class="imageupload" hidden>
                                        <img src="" alt="">
                                    </div>
                                    <div class="imageupload-content">
                                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    </div>
                                    <div id="cancel-btn"><i class="fas fa-times"></i></div>
                                    <div class="file-name">File name here</div>
                                </div>
                                
                                <input id="default-btn" type="file" multiple hidden>
                                <button onclick="defaultBtnActive()" class="btn btn-info" id="custom-btn">Choose files</button>
                            </div>-->
                            <div class="custom-file">
                            <div class="form-group" style="text-align: left;">
                                <label for="images">Upload photos:</label>
                                <input type="file" name="images" id="images" multiple/>
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="comment">Write description:</label>
                                <textarea class="form-control" name="description" id="description" rows="5" id="comment"></textarea>
                            </div>
                        </div>

                        <div class="oglas-basic">
                            <h6>Basic information:</h6>
                            <select name="condition" id="condition" class="custom-select">
                                <option selected>Condition</option>
                                <option value="New">New</option>
                                <option value="Good">Good condition</option>
                                <option value="Outdated">Outdated</option>
                            </select>
                            <select name="bedrooms" id="bedrooms" class="custom-select" >
                                <option selected>Bedrooms</option>
                                <option value="0">T0</option>
                                <option value="1">T1</option>
                                <option value="2">T2</option>
                                <option value="3">T3</option>
                                <option value="4">T4</option>
                                <option value="5+">T5+</option>
                              </select>
                            <select name="bathrooms" id="bathrooms" class="custom-select">
                                <option selected>Bathroom number</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4+">4+</option>
                              </select>
                            <select name="floor" id="floor" class="custom-select">
                                <option selected>Floor</option>
                                <option value="Basement">Basement</option>
                                <option value="Semi-basement">Semi-basement</option>
                                <option value="Ground">Ground</option>
                                <option value="Middle">Middle</option>
                                <option value="Top">Top</option>
                                <option value="Attic">Attic</option>
                            </select>
                            <input type="text" name="insidesize" id="insidesize" class="form-control" placeholder="Inside area size (m2)">
                            <input type="text" name="outsidesize" id="outsidesize" class="form-control" placeholder="Outside area size (m2)">
                        </div>
                        <div class="oglas-basic">
                            <h6>Additional information:</h6>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox"  name="additionalinfo[]" class="form-check-input" value="Terrace">Terrace
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                    <input type="checkbox" name="additionalinfo[]" class="form-check-input" value="Lift">Lift
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                    <input type="checkbox"name="additionalinfo[]"  class="form-check-input" value="Storage room">Storage room
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                    <input type="checkbox"name="additionalinfo[]"  class="form-check-input" value="Air conditioning">Air conditioning
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" name="additionalinfo[]" class="form-check-input" value="Backyard">Backyard
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" name="additionalinfo[]" class="form-check-input" value="Pool">Pool
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" name="additionalinfo[]" class="form-check-input" value="Parking spot">Parking spot
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" name="additionalinfo[]"  class="form-check-input" value="Pet friendly">Pet Friendly
                                </label>
                            </div>

                        </div>
                        <div class="oglas-basic">
                            <h6>Included in price:</h6>
                            <input type="checkbox" name="expences[]" value="electricity" class="btn btn-outline-info">electricity
                            <input type="checkbox" name="expences[]" value="TV" class="btn btn-outline-info">TV
                            <input type="checkbox" name="expences[]" value="wi-fi" class="btn btn-outline-info">wi-fi
                            <input type="checkbox" name="expences[]" value="water" class="btn btn-outline-info">water
                            <input type="checkbox" name="expences[]" value="gas" class="btn btn-outline-info">gas
                            <input type="checkbox" name="expences[]" value="all" class="btn btn-outline-info">All
                            <input type="checkbox" name="expences[]" value="clening services" class="btn btn-outline-info">cleaning services
                            <input type="checkbox" name="expences[]" value="excluded" class="btn btn-outline-info">excluded
                        </div>
                        <div class="oglas-post">
                            <button type="submit" class="btn btn-info">List</button>
                        </div>

                    </form>
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
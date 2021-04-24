@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oglas</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script defer src="js/app.js"></script>
</head>

<body>

    <div class="oglas-nav">
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
    </div>

    <section class="oglas">
        <div class="container">
            <h4> Host Your Home</h4>

            <div class="row oglas-okvir">
                <div class="col-md-6">
                    <form method="" action="" enctype="multipart/form-data" id="listproperty">
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
                                <option value="Shared property">Room</option>
                                <option value="Flat">Boat</option>
                                <option value="Rustic">Co-living</option>
                            </select>
                        </div>
                        <div class="oglas-basic">
                            <input type="text" class="form-control" placeholder="Title">
                            <input type="text" class="form-control" placeholder="City">
                            <input type="text" class="form-control" placeholder="Price">
                        </div>
                        <div class="oglas-basic">
                            <div class="imageupload-container">
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
                            </div>
                            <!--<div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFile" multiple>
                                <label class="custom-file-label" for="customFile">Import images here</label>
                                <button type="button" class="btn btn-info">Upload</button>
                                </div>-->
                            <div class="form-group" style="text-align: left;">
                                <label for="comment">Write description:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>

                        <div class="oglas-basic">
                            <h6>Basic information:</h6>
                            <select name="cars" class="custom-select">
                                <option selected>Condition</option>
                                <option value="Ground">New</option>
                                <option value="Middle">Good condition</option>
                                <option value="Middle">Outdated</option>
                            </select>
                            <select name="cars" class="custom-select" >
                                <option selected>Bedrooms</option>
                                <option value="0">T0</option>
                                <option value="1">T1</option>
                                <option value="2">T2</option>
                                <option value="3">T3</option>
                                <option value="4">T4</option>
                                <option value="5">T5+</option>
                              </select>
                            <select name="cars" class="custom-select">
                                <option selected>Bathroom number</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4+</option>
                              </select>
                            <select name="cars" class="custom-select">
                                <option selected>Floor</option>
                                <option value="Basement">Basement</option>
                                <option value="Semi-basement">Semi-basement</option>
                                <option value="Ground">Ground</option>
                                <option value="Middle">Middle</option>
                                <option value="Top">Top</option>
                                <option value="Attic">Attic</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Inside area size (m2)">
                            <input type="text" class="form-control" placeholder="Outside area size (m2)">
                        </div>
                        <div class="oglas-basic">
                            <h6>Additional information:</h6>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" value="">Terrace
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Lift
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Storage room
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Air conditioning
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" value="">Backyard
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" value="">Pool
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" value="">Parking spot
                                </label>
                            </div>
                            <div class="form-check" style="text-align: left;">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" value="">Pet Friendly
                                </label>
                            </div>

                        </div>
                        <div class="oglas-basic">
                            <h6>Included in price:</h6>
                            <button type="button" class="btn btn-outline-info">electricity</button>
                            <button type="button" class="btn btn-outline-info">TV</button>
                            <button type="button" class="btn btn-outline-info">wi-fi</button>
                            <button type="button" class="btn btn-outline-info">water</button>
                            <button type="button" class="btn btn-outline-info">gas</button>
                            <button type="button" class="btn btn-outline-info">All</button>
                            <button type="button" class="btn btn-outline-info">cleaning services</button>
                        </div>
                        <div class="oglas-post">
                            <button type="button" class="btn btn-info">List</button>
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

</body>

</html>
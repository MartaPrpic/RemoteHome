@extends('master')
@section("content")
<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>-->

<body style="background-image: linear-gradient(rgb(0, 195, 230), rgb(211, 237, 255));">

    <div class="container">
        <div class="label">
            <a href="/"><img src="img/logo.png" alt="Logo" style="width: 90px; height: 95px; margin-top:20px; "></a>
            <h4>Log In</h4>
        </div>

        <div class="signin">

                <form action="login" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="email">Email address:</label>
                        <input type="email" name ="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
                    </div>
                    <button type="submit" class="btn btn-info">Login</button>
                </form>
                <div class="col-md-12 ">
                    <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                    </div>
                    <div class="facebook"> <button type="button" class="btn btn-primary btn-block "><i class="fab fa-facebook-f"></i> Continue with Facebook</button></div>
                    <div class="google"><button type="button" class="btn btn-primary btn-block "><i class="fab fa-google"></i> Continue with Google</button></div>
                </div>
            
        </div>
    </div>


</body>

@endsection

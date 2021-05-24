@extends('master')
@section("content")
<body style="background-image: linear-gradient(rgb(0, 195, 230), rgb(211, 237, 255));">

    <div class="container">
        <div class="label">
        <a href="/"><img src="img/logo.png" alt="Logo" style="width: 90px; height: 95px; margin-top:20px; "></a>
            <h4>Register</h4>
        </div>

        <div class="signin">
                <form action="register" method="POST"> 
                    @csrf
                    
                    <div class="form-group">
            
                        <label for="name">User Name:</label>
                        <input type="text" name ="name" class="form-control" placeholder="Enter Name" id="name">
                    </div>
                    <div class="form-group">
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
                    <button type="submit" class="btn btn-info">Register</button>
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
        
    </div>
</div>

</body>
@endsection
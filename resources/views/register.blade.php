@extends('master')
@section("content")
<div class="container">
        <div class="label">
            <a href="index.html"><img src="img/logo.png" alt="Logo" style="width: 90px; height: 95px; "></a>
            <h4>Register</h4>
        </div>

        <div class="row signin">

            <div class="col-md-6">
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
            </div>
        </div>
    </div>
</div>
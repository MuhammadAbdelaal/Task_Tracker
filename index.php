<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Custom Css -->
    <link rel="stylesheet" href="main.css">

    <title>Task Tracker</title>
  </head>
  <body>

    <!-- Navigation Bar with login Button-->
    <nav class="navbar navbar-custom bg-light">
        <a class="navbar-brand mb-0 h1" href="#">Task Tracker</a>
        <a class="btn btn-light" href="#login_modal" data-toggle="modal">Login</a>
    </nav>
    
    <!-- Jumbotron with Sign up Button -->
    <div class="jumbotron">
        <h1>Task Tracker App</h1>    
        <p>Tracking your Tasks has never been easier.</p>
        <button type="button" class="btn btn-lg btn-success"
         data-target="#signup_modal" data-toggle="modal">Sign Up</button>
    </div>

    <!-- Login Form -->
    <form method="post" id="login_form">
        <div class="modal" id="login_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login to your account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body">
                        <!-- Login message from PHP file -->
                        <div class="login-message">
                            
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="login-email" placeholder="Enter your email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="login-password" placeholder="enter your password" maxlength="30">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- Sign up Form -->
    <form method="post" id="signup_form">
        <div class="modal" id="signup_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sign Up to create new account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body">
                        <!-- Signup message from PHP file -->
                        <div class="signup-message">
                            
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email address</label>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Enter email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Chose a Password" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="password2">Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="Confirm your Password" maxlength="30">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Forget Password Form -->

    <!-- Footer -->
    <div class="footer">
        <p>Muhammad Reda Abdelaal Copyright &copy; 2017 -<?php $current_year = date("Y"); echo $current_year; ?> All Rights Reserved</p>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
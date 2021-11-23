<html>
    <head>
        <title>Buy Now</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/index.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>">
    </head>

    <body>
        <!--starting cover-->
        <div class="cover-section">
          <div class="back">
            <!--starting navbar-->
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#">Buy <span> Now </span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
            <!--ending navbar-->
            <!--starting content-->
            <div class="content text-center">
              <br><br><br><br><br><br><br><br><br>
              <h1>Buy Now <span>E-commerce</span> </h1>
            </div>
            <!--ending content-->
          </div>
        </div>
        <!--ending cover-->

        <!--starting taps-->
        <div class="taps-section text-center" id="prods">
          <br><br><br>
          <div class="container">
            <div class="row">
              <div class="mobile col-lg-4 col-md-12 col-sm-12"> <a href="/mobile_prod_view">Mobiles</a> </div>
              <div class="electronics col-lg-4 col-md-12 col-sm-12"> <a href="/electronic_prod_view">Electronics</a> </div>
              <div class="computer col-lg-4 col-md-12 col-sm-12"> <a href="/computer_prod_view">Computers</a> </div>
            </div>
          </div>
        </div>
        <!--ending taps-->

        <!--starting footer-->
        <div class="footer-section text-center" id="Auth">
          <br><br>
          <h1>Auth</h1>
          <br><br><br><br>
          <div class="container">
            <div class="row">
              <div class="loginForm text-center">
                @if(session('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @endif
                <br><br>
                <form action="/login" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter email" name="usernameLogin">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="passwordLogin">
                  </div>
                  <button type="submit" class="btn btn-primary form-control">Login</button>
                </form>
                <br>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click To SignUp</button>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <form action="/sign_up" method="post">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Username" name="username">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-Enter Password" name="repassword">
                          </div>
                          <button type="submit" class="btn btn-primary form-control">Sign Up</button>
                        </form>
                      </div>
                    </div>

                  </div>
                </div>
                <br><br>

              </div>
            </div>
          </div>
          <br><br>
          <div class="bookmark text-center">
            <p>
                Copyright ©2020 All rights reserved | Buy Now is made with
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                by <span>Mostafa Gamal</span>
            </p>
          </div>
        </div>
        <!--ending footer-->



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="<?php echo asset('js/popup.js'); ?>">

        </script>
    </body>

</html>

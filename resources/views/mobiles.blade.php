<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/admin/header.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/mobiles.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/getInfo.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    </head>

    <body>
      <!--starting navbar-->
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Buy <span> Now </span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <!--ending navbar-->
      <br>
          <div class="title text-center">
            <h1>Mobiles Products</h1>
          </div>
          <div class="Products">
            <div class="container">
              <div class="row">
                @foreach($newProducts as $obj)
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top text-center" src="{{ asset('uploads/' . $obj->image ) }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Price</h5>
                      <i class="fa fa-money" aria-hidden="true"> <span>{{ $obj->price }}</span> </i>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="back text-center">
            <a href="/">Back</a>
          </div>

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
  </body>

</html>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/admin/header.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/mobiles.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>">
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
            <h1>Computers Products</h1>
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
                    <br>
                  </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="back text-center">
            <a href="/">Back</a>
          </div>

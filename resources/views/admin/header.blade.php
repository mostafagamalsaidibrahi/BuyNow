@if( ! session('username'))
<?php die("Unable to Connect"); ?>
@endif

<html>
    <head>
        <title>Buy Now</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/admin/header.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/add_product.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/settings.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/admin/profile.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>">
    </head>

    <body>
      <!--starting navbar-->
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Buy <span> Now </span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/main_view"> <i class="fa fa-plus" aria-hidden="true"></i> <span>Add Product</span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/settings"> <i class="fa fa-cogs" aria-hidden="true"></i>Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profile"> <i class="fa fa-user" aria-hidden="true"></i> <span>Profile</span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout"> <i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span> </a>
            </li>
            <li class="nav-item username">
              <a class="nav-link username" href="#ourProds"> <i class="fa fa-user" aria-hidden="true"></i>
                @if(session('username'))
                <span>
                  Hello {{session('username')}}
                </span>
                @endif
               </a>
            </li>
            <br>
          </ul>
        </div>
      </nav>
      <!--ending navbar-->

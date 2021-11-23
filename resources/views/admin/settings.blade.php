@include('admin.header')

@yield('content')
<br><br><br><br><br><br><br><br>
<div class="settings-section">
  <div class="container">
    <div class="row">
      <div class="users-num col-lg-3 col-md-6 col-sm-12">
        <h1><i class="fa fa-user" aria-hidden="true"></i></h1>
        <h1>{{ $users }}</h1>
      </div>
      <div class="mobiles-num col-lg-3 col-md-6 col-sm-12">
        <h1><i class="fa fa-mobile" aria-hidden="true"></i></h1>
        <h1>{{ $mobiles }}</h1>
      </div>
      <div class="computers-num col-lg-3 col-md-6 col-sm-12">
        <h1><i class="fa fa-laptop" aria-hidden="true"></i></h1>
        <h1> {{ $computers }} </h1>
      </div>
      <div class="electronics-num col-lg-3 col-md-6 col-sm-12">
        <h1><i class="fa fa-bolt" aria-hidden="true"></i></h1>
        <h1> {{ $electronics }} </h1>
      </div>
    </div>
  </div>
</div>

@include('admin.footer')

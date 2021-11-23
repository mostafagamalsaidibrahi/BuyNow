@include('user.header')

@yield('content')
@if(session('product_data'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>{{session('product_data')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<br><br><br>
<div class="title text-center">
  <h1>Mobiles Products</h1>
</div>
<br>
<div class="Products">
  <div class="container">
    <div class="row">
      @foreach($newMobileProducts as $obj)
          <div class="card" style="width: 18rem;">
            <img class="card-img-top text-center" src="{{ asset('uploads/' . $obj->image ) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Price</h5>
              <i class="fa fa-money" aria-hidden="true"> <span>{{ $obj->price }}</span> </i>
            </div>
            <div class="card-body">
              <a href="/getMore/{{$obj->pId}}">Get More</a>
            </div>
          </div>
      @endforeach
    </div>
  </div>
</div>
@include('admin.footer')

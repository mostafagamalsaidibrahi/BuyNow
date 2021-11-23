@include('user.header')

@yield('content')
@if(session('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>{{session('message')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<br><br><br><br><br><br><br><br>
@foreach($getQunatity as $obj)
<div class="update-from text-center">
  <form action="/update_quan" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="number" value="{{ $obj->quantity }}" name="newQuantity">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endforeach

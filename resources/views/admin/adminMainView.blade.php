@include('admin.header')

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
  <div class="add-product text-center">
    <form action="/main_view" method="post"  enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group text-center"> <!-- image -->
          <input type="file" class="form-control-file" name="image" accept="image/x-png,image/gif,image/jpeg">
      </div>
      <div class="form-group"> <!-- decription -->
          <textarea class="form-control" placeholder="Enter Specifications" name="specifications"></textarea>
      </div>
      <div class="form-group">
        <select name="classif">
          <option value="Mobiles">Mobiles</option>
          <option value="Electronics">Electronics</option>
          <option value="Computers">Computers</option>
        </select>
      </div>
      <div class="form-group">  <!-- price -->
        <input type="number" class="form-control" placeholder="Enter price" name="price">
      </div>
      <button type="submit" class="btn btn-primary form-control">Save</button>
    </form>
  </div>


@include('admin.footer')

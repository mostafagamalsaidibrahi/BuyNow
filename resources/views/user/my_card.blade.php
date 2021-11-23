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
<br><br>
<div class="show_data">
  <table class="table">

    <thead class="thead-dark">
      <tr>
        <th scope="col">Preview</th>
        <th scope="col">Class</th>
        <th scope="col">Qunatity</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    <tbody>
      @foreach($cardData as $obj)
      <tr>
        <th scope="row">
          <img class="card-img-top text-center" src="{{ asset('uploads/' . $obj->image ) }}">
         </th>
        <td>{{ $obj->classif }}</td>
        <td>{{ $obj->quantity }}</td>
        <td>{{ $obj->price * $obj->quantity }}</td>
        <td>
          <a href="/update/{{ $obj->pId }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
          <a href="/delete_prod/{{ $obj->pId }}"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@include('admin.footer')

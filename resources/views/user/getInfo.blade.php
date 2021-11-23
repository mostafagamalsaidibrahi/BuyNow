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
      @foreach($ProductsInfo as $obj)
      <div class="showProdsDetails">
        <div class="container">
          <div class="row">
            <div class="infoClass col-lg-6 col-md-6 col-sm-12">
              <h1>Specification</h1>
              <p>{{ $obj->specifications }}</p>
              <h1>Price</h1>
              <p> <i class="fa fa-money" aria-hidden="true"> <span>{{ $obj->price }}</span> </i> </p>
              <h1>Date</h1>
              <p>{{ $obj->time }}</p>
              <br>
              <button type="button" name="button"  data-toggle="modal" data-target="#myModal">Add To Card</button>

              <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <form action="/add_to_card/{{$obj->pId}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body text-center">
                        <input type="number" placeholder="Enter Quantity" name="quantity">
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Add</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <br>
            <div class="imageClass col-lg-6 col-md-6 col-sm-12">
              <img class="card-img-top text-center" src="{{ asset('uploads/' . $obj->image ) }}" alt="Card image cap">
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>

</html>

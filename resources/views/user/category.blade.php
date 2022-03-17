@if(session()->has('message'))
<div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">X</button>
          {{session()->get('message')}}
</div>

@endif
<div class="latest-products">
          <div class="container">
                    <div class="row">
                              <div class="col-md-12">
                                        <div class="section-heading">
                                                  <h2>Category</h2>
                                                  <a href="{{url('category')}}">view all category <i class="fa fa-angle-right"></i></a>
                                                  <form action="{{url('search')}}" method="GET" class="form-inline" style="float:right; padding:10px;">
                                                            @csrf
                                                            <input type="search" name="search" placeholder="Search" class="form-control">
                                                            <input type="submit" value="Search" class="btn btn-success">
                                                  </form>
                                        </div>

                              </div>




                    </div>
          </div>
</div>
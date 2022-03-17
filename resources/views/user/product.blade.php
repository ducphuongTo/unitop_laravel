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
                                                  <h2>ALl Products</h2>

                                                  <form action="{{url('search')}}" method="GET" class="form-inline" style="float:right; padding:10px;">
                                                            @csrf
                                                            <input type="search" name="search" placeholder="Search" class="form-control">
                                                            <input type="submit" value="Search" class="btn btn-success">
                                                  </form>
                                        </div>

                              </div>


                              @foreach($data as $product)
                              <div class="col-md-4">
                                        <div class="product-item">
                                                  <a href="{{url('category/'.$product->category.'/'.$product->slug)}}"><img src="/productimage/{{$product->image}}" alt="">
                                                            <div class="down-content">

                                                                      <h4>{{$product->title}}</h4>

                                                                      <h6>{{$product->price}}$</h6>
                                                                      <p> {{$product->description}}</p>

                                                                      <form action="{{url('addCart',$product->id)}}" style="text-align: center;" method="POST">
                                                                                @csrf
                                                                                <input type="number" value="1" min="1" name="quantity" class="form-control" style="width:100px;">
                                                                                <br>
                                                                                <input type="submit" class="btn btn-primary" value="Add Cart">
                                                                      </form>
                                                                      <br>

                                                                      <ul class="stars">
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                                <li><i class="fa fa-star"></i></li>
                                                                      </ul>
                                                                      <span>Reviews (32)</span>
                                                            </div>
                                                  </a>
                                        </div>
                              </div>
                              @endforeach
                              @if(method_exists($data,'links'))
                              <div class="d-flex justify-content-center">
                                        {!! $data->links()!!}

                              </div>
                              @endif

                    </div>
          </div>
</div>
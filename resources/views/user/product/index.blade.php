@extends('layouts.front')


@section('title',$products->name)

@endsection


@section('content')
<div class="latest-products">
          <div class="container">
                    <div class="row">
                              <div class="col-md-12">
                                        <div class="section-heading">
                                                  <h2 class="mb-0">Collections/Category Name/Product Name</h2>

                                        </div>

                              </div>



                              <div class="col-md-4">
                                        <div class="product-item">

                                                  <img src="/productimage/{{$products->image}}" alt="">
                                                  <div class="down-content">

                                                            <h4>{{$products->title}}</h4>

                                                            <h6>{{$products->price}}$</h6>
                                                            <p> {{$products->description}}</p>

                                                            <form action="{{url('addCart',$products->id)}}" style="text-align: center;" method="POST">
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

                                        </div>
                              </div>



                    </div>
          </div>
</div>
@endsection
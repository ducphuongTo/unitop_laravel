@extends('layouts.front')


@section('title')
{{$category->name}}
@endsection


@section('content')
<div class="latest-products">
          <div class="container">
                    <div class="row">
                              <div class="col-md-12">
                                        <div class="section-heading">
                                                  <h2>{{$category->name}}</h2>

                                        </div>

                              </div>


                              @foreach($products as $product)
                              <div class="col-md-4">
                                        <div class="product-item">
                                                  <a href="{{url('category/'.$category->slug.'/'.$product->slug)}}">
                                                            <img src="/productimage/{{$product->image}}" alt="">
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
                              @if(method_exists($products,'links'))
                              <div class="d-flex justify-content-center">
                                        {!! $products->links()!!}

                              </div>
                              @endif

                    </div>
          </div>
</div>
@endsection
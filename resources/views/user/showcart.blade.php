<!DOCTYPE html>
<html lang="en">

<head>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

          <title>Sixteen Clothing HTML Template</title>

          <!-- Bootstrap core CSS -->
          <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

          <!-- Additional CSS Files -->
          <link rel="stylesheet" href="assets/css/fontawesome.css">
          <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
          <link rel="stylesheet" href="assets/css/owl.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>

<body>

          <!-- ***** Preloader Start ***** -->
          <div id="preloader">
                    <div class="jumper">
                              <div></div>
                              <div></div>
                              <div></div>
                    </div>
          </div>
          <!-- ***** Preloader End ***** -->

          <!-- Header -->
          <header class="">
                    <nav class="navbar navbar-expand-lg">
                              <div class="container">
                                        <a class="navbar-brand" href="/">
                                                  <h2>Sixteen <em>Clothing</em></h2>
                                        </a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                                                  <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarResponsive">
                                                  <ul class="navbar-nav ml-auto">
                                                            <li class="nav-item active">
                                                                      <a class="nav-link" href="/">Home
                                                                                <span class="sr-only">(current)</span>
                                                                      </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('iphone')}}">Iphone</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('samsung')}}">Samsung</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('xiaomi')}}">Xiaomi</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('about')}}">About Us</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                      @if (Route::has('login'))

                                                                      @auth
                                                            <li class="nav-item">
                                                                      <a class="nav-link" href="{{url('showcart')}}">

                                                                                Cart[{{$count}}]
                                                                      </a>
                                                            </li>
                                                            <x-app-layout>

                                                            </x-app-layout>

                                                            @else
                                                            <li>
                                                                      <a class="nav-link" href="{{ route('login') }}">Log in</a>
                                                            </li>
                                                            @if (Route::has('register'))
                                                            <li><a class="nav-link" href="{{ route('register') }}">Register</a> </li>
                                                            @endif
                                                            @endauth

                                                            @endif

                                                            </li>
                                                  </ul>
                                        </div>
                              </div>
                    </nav>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert">X</button>
                              {{session()->get('message')}}
                    </div>

                    @endif
          </header>

          <div id="content" class="container-fluid">
                    <div class="card">
                              <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                                        <h5 class="m-0 ">Danh sách đơn hàng</h5>
                                        <div class="form-search form-inline">
                                                  <form action="#">
                                                            <input type="" class="form-control form-search" placeholder="Tìm kiếm">
                                                            <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                                                  </form>
                                        </div>
                              </div>
                              <div class="card-body">
                                        <form action="{{url('order')}}" method="POST">
                                                  @csrf
                                                  <table class="table table-striped table-checkall">
                                                            <thead>
                                                                      <tr>
                                                                                <th scope="col">Sản phẩm</th>
                                                                                <th scope="col">Số lượng</th>
                                                                                <th scope="col">Giá trị</th>
                                                                                <th scope="col">Trạng thái</th>
                                                                                <th scope="col">Thời gian</th>
                                                                                <th scope="col">Tác vụ</th>
                                                                      </tr>
                                                            </thead>

                                                            <tbody>
                                                                      @php
                                                                      $total = 0
                                                                      @endphp
                                                                      @foreach($cart as $carts)
                                                                      <tr>



                                                                                <td>
                                                                                          <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden>
                                                                                          {{$carts->product_title}}
                                                                                </td>
                                                                                <td>
                                                                                          <input type="text" name="product_quantity[]" value="{{$carts->product_quantity}}" hidden>
                                                                                          {{$carts->product_quantity}}

                                                                                </td>

                                                                                <td>
                                                                                          <input type="text" name="price[]" value="{{$carts->price}}" hidden>
                                                                                          {{$carts->price}}
                                                                                </td>

                                                                                <td><span class="badge badge-success">Hoàn thành</span></td>
                                                                                <td>26:06:2020 14:00</td>
                                                                                <td>
                                                                                          <a href="#" class="btn btn-success  " type="button" title="Edit"><i class="fa fa-edit">Update</i></a>
                                                                                          <a href="{{url('delete',$carts->id)}}" class="btn btn-danger " type="button" title="Delete"><i class="fa fa-trash">Delete</i></a>
                                                                                </td>

                                                                      </tr>
                                                                      @php

                                                                      $total += $carts->price * $carts->product_quantity;

                                                                      @endphp
                                                                      @endforeach

                                                            </tbody>



                                                  </table>
                                                  <div class="card-footer float-end">
                                                            <h6>Total Price: {{$total}} $</h6>
                                                  </div>
                                                  <br>
                                                  <button class="btn btn-success">Confirm Order</button>
                                        </form>

                              </div>
                    </div>
          </div>

          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


          <!-- Additional Scripts -->
          <script src="assets/js/custom.js"></script>
          <script src="assets/js/owl.js"></script>
          <script src="assets/js/slick.js"></script>
          <script src="assets/js/isotope.js"></script>
          <script src="assets/js/accordions.js"></script>


          <script language="text/Javascript">
                    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                    function clearField(t) { //declaring the array outside of the
                              if (!cleared[t.id]) { // function makes it static and global
                                        cleared[t.id] = 1; // you could use true and false, but that's more typing
                                        t.value = ''; // with more chance of typos
                                        t.style.color = '#fff';
                              }
                    }
          </script>


</body>

</html>
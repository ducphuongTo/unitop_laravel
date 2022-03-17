<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
          @include('admin.css')

          <style type="text/css">
                    .title {
                              color: white;
                              padding-top: 25px;
                              font-size: 25px;
                    }

                    input .form-control {
                              color: white;
                    }
          </style>
</head>

<body>

          @include('admin.sidebar')
          <!-- partial -->
          @include('admin.navbar')
          <div id="content" class="container-fluid">
                    <div class="card">
                              <div class="card-header font-weight-bold">
                                        Add product
                              </div>
                              @if(session()->has('message'))
                              <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">X</button>
                                        {{session()->get('message')}}
                              </div>

                              @endif
                              <div class="card-body">
                                        <form method="POST" action="{{url('uploadProduct')}}" enctype="multipart/form-data">
                                                  @csrf


                                                  <div class="form-group">
                                                            <label for="title">Product Title</label>
                                                            <input class="form-control" type="text" name="title" placeholder="Give product title" id="title" style="color:black;">

                                                  </div>
                                                  <div class="form-group">
                                                            <label for="category">Category</label>
                                                            <input class="form-control" type="text" name="category" placeholder="Give product category" id="title" style="color:black;">

                                                  </div>
                                                  <div class="form-group">
                                                            <label for="price">Price</label>
                                                            <input class="form-control" name="price" placeholder="Give a price" type="number" style="color:black;">

                                                  </div>
                                                  <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <input class="form-control" type="text" name="description" id="description" placeholder="Give description" style="color:black;">

                                                  </div>

                                                  <div class="form-group">
                                                            <label for="quantity">Quantity</label>
                                                            <input class="form-control" type="text" name="quantity" id="quantity" placeholder="Product quantity" style="color:black;">
                                                  </div>

                                                  <div class="form-group">

                                                            <input class="form-control" type="file" name="file">
                                                  </div>


                                                  <button type="submit" name="btn-add" class="btn btn-primary">Thêm mới</button>
                                        </form>
                              </div>
                    </div>
          </div>
          <!-- partial -->
          @include('admin.script')
</body>

</html>
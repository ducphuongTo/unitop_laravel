<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
          <base href="/public">
          @include('admin.css')
</head>

<body>

          @include('admin.sidebar')
          <!-- partial -->
          @include('admin.navbar')

          <!-- partial -->
          <div id="content" class="container-fluid">
                    <div class="card">
                              <div class="card-header font-weight-bold">
                                        UPDATE PRODUCT
                              </div>
                              @if(session()->has('message'))
                              <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">X</button>
                                        {{session()->get('message')}}
                              </div>

                              @endif
                              <div class="card-body">
                                        <form method="POST" action="{{url('updateproduct',$data->id)}}" enctype="multipart/form-data">
                                                  @csrf

                                                  <div class="form-group">
                                                            <label for="name">Product Title</label>
                                                            <input class="form-control" type="text" name="name" value="{{$data->title}}" id="name" style="color:black;">

                                                  </div>
                                                  <div class="form-group">
                                                            <label for="price">Price</label>
                                                            <input class="form-control" name="price" type="number" value="{{$data->price}}" style="color:black;">

                                                  </div>
                                                  <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <input class="form-control" type="text" name="description" id="description" value="{{$data->description}}" style="color:black;">

                                                  </div>

                                                  <div class="form-group">
                                                            <label for="quantity">Quantity</label>
                                                            <input class="form-control" type="text" name="quantity" id="quantity" value="{{$data->quantity}}" style="color:black;">
                                                  </div>

                                                  <div class="form-group">
                                                            <label for="quantity">Old Image</label>
                                                            <img src="/productimage/{{$data->image}}" height="300" width="300" alt="">
                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Change the Image</label>
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
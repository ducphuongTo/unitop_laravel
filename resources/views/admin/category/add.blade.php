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
                                        Add category
                              </div>
                              @if(session()->has('message'))
                              <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">X</button>
                                        {{session()->get('message')}}
                              </div>

                              @endif
                              <div class="card-body">
                                        <form method="POST" action="{{url('insert-cate')}}" enctype="multipart/form-data">
                                                  @csrf

                                                  <div class="form-group">
                                                            <label for="category">Category Name</label>
                                                            <input class="form-control" type="text" name="name" placeholder="Give product category" id="title" style="color:black;">

                                                  </div>
                                                  <div class="form-group">
                                                            <label for="slug">Slug</label>
                                                            <input type="text" class="form-control" style="border: 1px solid black;" name="slug">

                                                  </div>
                                                  <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <input class="form-control" type="text" name="description" id="description" placeholder="Give description" style="color:black;">

                                                  </div>

                                                  <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <input class=" form-check-input mt-0" type="checkbox" name="status" id="status" placeholder="Product status" style="color:black;">
                                                  </div>


                                                  <div class="form-group">
                                                            <label for="popular">Popular</label>
                                                            <input class="form-check-input mt-0" type="checkbox" name="popular" placeholder="Give product popular" id="popular" style="color:black;">

                                                  </div>


                                                  <div class="form-group">
                                                            <label for="">Meta Title</label>
                                                            <input class="form-control" type="text" name="meta_title" placeholder="Give product title" id="meta_title" style="color:black;">

                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Meta Description</label>
                                                            <input class="form-control" type="text" name="meta_description" placeholder="Give product description" id="meta_title" style="color:black;">

                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Meta keyword</label>
                                                            <input class="form-control" type="text" name="meta_keywords" placeholder="Give product keyword" id="meta_title" style="color:black;">

                                                  </div>

                                                  <div class="form-group">

                                                            <input class="form-control" type="file" name="image">
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
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
                                        UPDATE CATEGORY
                              </div>
                              @if(session()->has('message'))
                              <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">X</button>
                                        {{session()->get('message')}}
                              </div>

                              @endif
                              <div class="card-body">
                                        <form method="POST" action="{{url('edit-category',$category->id)}}" enctype="multipart/form-data">
                                                  @csrf
                                                  @method('PUT')
                                                  <div class="form-group">
                                                            <label for="" class="form-label">Name</label>
                                                            <input type="text" value="{{$category->name}}" class="form-control" name="name" style="border: 1px solid black;">
                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Slug</label>
                                                            <input type="text" value="{{$category->slug}}" class="form-control" style="border: 1px solid black;" name="slug">
                                                  </div>

                                                  <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <input class="form-control" type="text" name="description" id="description" value="{{$category->description}}" style="color:black;">

                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Status</label>
                                                            <input class="form-check-input mt-0" type="checkbox" name="status" {{$category->status == 1 ? 'checked' : ''}}>
                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Popular</label>
                                                            <input class="form-check-input mt-0" type="checkbox" name="popular" {{$category->popular == 1 ? 'checked' : ''}}>
                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Meta Title</label>
                                                            <input type="text" class="form-control" style="border: 1px solid black;" value="{{$category->meta_title}}" name="meta_title">
                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Meta keyword</label>
                                                            <input class="form-control" type="text" name="description" id="description" value="{{$category->meta_descrip}}" style="color:black;">
                                                  </div>

                                                  <div class="form-group">
                                                            <label for="">Meta Description</label>
                                                            <input class="form-control" type="text" name="description" id="description" value="{{$category->meta_keywords}}" style="color:black;">

                                                  </div>

                                                  @if($category->image)
                                                  <img src="{{asset('asset/uploads/category'. $category->image)}}" alt="">
                                                  @endif
                                                  <div class="input-group mb-3">
                                                            <input type="file" class="form-control" name="image" style="border: 1px solid black;">

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
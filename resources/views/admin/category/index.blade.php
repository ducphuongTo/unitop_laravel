<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
          @include('admin.css')
</head>

<body>

          @include('admin.sidebar')
          <!-- partial -->
          @include('admin.navbar')

          <!-- partial -->
          <div id="content" class="container-fluid">
                    <div class="card">
                              <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                                        <h5 class="m-0 ">Danh sách loại điện thoại</h5>
                                        <div class="form-search form-inline">
                                                  <form action="#">
                                                            <input type="" class="form-control form-search" placeholder="Tìm kiếm">
                                                            <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                                                  </form>
                                        </div>
                              </div>
                              <div class="card-body">

                                        @csrf
                                        <table class="table table-striped table-checkall">
                                                  <thead>
                                                            <tr>
                                                                      <td scope="col">Id</td>
                                                                      <td scope="col">Name</td>
                                                                      <td scope="col">Description</td>
                                                                      <td scope="col">Image</td>
                                                                      <td scope="col">Action</td>
                                                            </tr>
                                                  </thead>

                                                  <tbody>
                                                            @foreach($category as $item)
                                                            <tr>
                                                                      <td>{{$item->id}}</td>
                                                                      <td>{{$item->name}}</td>
                                                                      <td>{{$item->description}}</td>
                                                                      <td>
                                                                                <img src="{{asset('asset/uploads/category/'.$item->image)}}" class="cate-image" alt="">
                                                                      </td>
                                                                      <td>
                                                                                <a href="{{url('edit-category/'.$item->id)}}" class="btn btn-primary">
                                                                                          Edit
                                                                                </a>
                                                                      </td>
                                                                      <td> <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger">
                                                                                          Delete
                                                                                </a></td>
                                                            </tr>
                                                            @endforeach


                                                  </tbody>


                                        </table>
                                        <button class="btn btn-success">Confirm Order</button>



                              </div>
                    </div>
          </div>
          <!-- partial -->
          @include('admin.script')
</body>

</html>
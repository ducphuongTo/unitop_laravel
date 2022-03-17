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
                                        <h5 class="m-0 ">Danh sách sản phẩm</h5>
                                        <div class="form-search form-inline">
                                                  <form action="#">
                                                            <input type="" class="form-control form-search" placeholder="Tìm kiếm">
                                                            <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                                                  </form>
                                        </div>
                              </div>
                              @if(session()->has('message'))
                              <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">X</button>
                                        {{session()->get('message')}}
                              </div>

                              @endif
                              <div class="card-body">
                                        <div class="analytic">
                                                  <a href="" class="text-primary">Trạng thái 1<span class="text-muted">(10)</span></a>
                                                  <a href="" class="text-primary">Trạng thái 2<span class="text-muted">(5)</span></a>
                                                  <a href="" class="text-primary">Trạng thái 3<span class="text-muted">(20)</span></a>
                                        </div>
                                        <div class="form-action form-inline py-3">
                                                  <select class="form-control mr-1" id="">
                                                            <option>Chọn</option>
                                                            <option>Tác vụ 1</option>
                                                            <option>Tác vụ 2</option>
                                                  </select>
                                                  <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
                                        </div>
                                        <table class="table table-striped table-checkall">
                                                  <thead>
                                                            <tr>
                                                                      <th scope="col">
                                                                                <input name="checkall" type="checkbox">
                                                                      </th>
                                                                      <th scope="col">#</th>
                                                                      <th scope="col">Ảnh</th>
                                                                      <th scope="col">Tên sản phẩm</th>
                                                                      <th scope="col">Giá</th>
                                                                      <th scope="col">Danh mục</th>
                                                                      <th scope="col">Số lượng</th>
                                                                      <th scope="col">Trạng thái</th>
                                                                      <th scope="col">Tác vụ</th>
                                                            </tr>
                                                  </thead>

                                                  <tbody>
                                                            @foreach($data as $product)
                                                            <tr class="">
                                                                      <td>
                                                                                <input type="checkbox">
                                                                      </td>
                                                                      <td>1</td>
                                                                      <td><img src="/productimage/{{$product->image}}" width="100" height="100" alt=""></td>
                                                                      <td>{{$product->title}}</td>
                                                                      <td>{{$product->price}}₫</td>
                                                                      <td>{{$product->description}}</td>
                                                                      <td>{{$product->quantity}}</td>
                                                                      <td><span class="badge badge-success">Còn hàng</span></td>

                                                                      <td>
                                                                                <a href="{{url('updateview',$product->id)}}" class="btn btn-success btn-sm rounded-0 text-white" type="button" title="Edit">Update</a>
                                                                                <a href="{{url('deleteproduct',$product->id)}}" class="btn btn-danger btn-sm rounded-0 text-white" type="button" title="Delete" onclick="return confirm('Are you sure?')">Delete</a>
                                                                      </td>
                                                            </tr>

                                                            @endforeach

                                                  </tbody>

                                        </table>
                                        <nav aria-label="Page navigation example">
                                                  <ul class="pagination">
                                                            <li class="page-item">
                                                                      <a class="page-link" href="#" aria-label="Previous">
                                                                                <span aria-hidden="true">Trước</span>
                                                                                <span class="sr-only">Sau</span>
                                                                      </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item">
                                                                      <a class="page-link" href="#" aria-label="Next">
                                                                                <span aria-hidden="true">&raquo;</span>
                                                                                <span class="sr-only">Next</span>
                                                                      </a>
                                                            </li>
                                                  </ul>
                                        </nav>
                              </div>
                    </div>
          </div>
          <!-- partial -->
          @include('admin.script')
</body>

</html>
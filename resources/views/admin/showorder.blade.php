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
                                                                                <th scope="col">Tên Khách Hàng</th>
                                                                                <th scope="col">SĐT</th>
                                                                                <th scope="col">Địa chỉ</th>
                                                                                <th scope="col">Tên Sản Phẩm</th>
                                                                                <th scope="col">Giá</th>
                                                                                <th scope="col">Số Lượng</th>
                                                                                <th scope="col">Trạng Thái</th>
                                                                      </tr>
                                                            </thead>

                                                            <tbody>
                                                                      @foreach($order as $orders)
                                                                      <tr>
                                                                                <td> {{$orders->name}} </td>
                                                                                <td>
                                                                                          {{$orders->phone}}


                                                                                </td>

                                                                                <td>
                                                                                          {{$orders->address}}

                                                                                </td>

                                                                                <td>{{$orders->product_name}} </td>
                                                                                <td>{{$orders->price}} </td>
                                                                                <td>{{$orders->product_quantity}} </td>
                                                                                <td>{{$orders->status}} </td>
                                                                                <td>
                                                                                          <a href="{{url('updatestatus',$orders->id)}}" class="btn btn-success  " type="button" title="Edit"><i class="fa fa-edit">Update</i></a>

                                                                                </td>

                                                                      </tr>
                                                                      @endforeach


                                                            </tbody>


                                                  </table>
                                                  <button class="btn btn-success">Confirm Order</button>
                                        </form>
                                        <br>
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
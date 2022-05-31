   @extends('admin.layout.index')
   @section('content')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hoá đơn
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                           @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>
                            @endforeach
                        </div>
                        @endif

                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>ID khách hàng</th> 
                                <th>Ngày Đặt</th>
                                <th>Tổng tiền</th>
                                <th>Hình thức thanh toán</th>
                                <th>Ghi Chú</th>
                                <th>Delete</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bill as $bl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$bl->id}}</td>
                                <td>{{$bl->id_customer}}</td>
                                <td>{{$bl->date_order}}</td>
                                <td>{{$bl->total}}</td>
                                <td>{{$bl->payment}}</td>
                                <td>{{$bl->note}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/bill/xoa/{{$bl->id}}"> Delete</a></td>
                            </tr>
                           @endforeach 
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
  @endsection
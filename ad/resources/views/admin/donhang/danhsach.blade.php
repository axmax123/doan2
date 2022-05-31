    @extends('admin.layout.index')
 @section('content')
   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên khách hàng </th>
                                <th>Số đt</th>
                                <th>Email</th>
                                <th>Delete</th>                               
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($donhang  as $dh)
                            <tr class="odd gradeX" align="center">
                                <td>{{$dh->id}}</td>
                                <td>{{$dh->tenkhachhang}}</td>
                                <td>{{$dh->sodienthoai}}</td>
                                <td>{{$dh->email}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/donhang/xoa/{{$dh->id}}"> Delete</a></td>
                            </tr>
                           @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
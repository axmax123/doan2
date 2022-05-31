           @extends('admin.layout.index')
           @section('content')
           <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Danh sách user
                                    <small>Danh sách</small>
                                </h1>
                            </div>
                            <!-- /.col-lg-12 -->
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr align="center">
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>pass</th>
                                        <th>Sdt</th>
                                        <th>Địa chỉ</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $us)
                                    <tr class="odd gradeX" align="center">
                                        <td>{{$us->id}}</td>
                                        <td>{{$us->full_name}}</td>
                                        <td>{{$us->email}}</td>
                                        <td>{{$us->password}}</td>
                                        <td>{{$us->phone}}</td>
                                        <td>{{$us->address}}</td>
                                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$us->id}}"> Delete</a></td>
                                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$us->id}}">Edit</a></td>
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
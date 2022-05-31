   @extends('admin.layout.index')
   @section('content')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
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
                                <th>Tên thể loại</th>                               
                                <th>ID loại</th>
                                <th>Mô tả</th>
                                <th>Giá </th>
                                <th>Giá sale</th>
                                <th>Ảnh</th>
                                <th>Loại</th>
                                <th>new</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sanpham  as $sp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp->id}}</td>
                                <td>{{$sp->name}}</td>
                                 <td>{{$sp->id_type}}</td>
                               <td>{{$sp->description}}</td>                                
                                 <td>{{$sp->unit_price}}</td>
                                <td>{{$sp->promotion_price}}</td>
                                 <td>{{$sp->image}}</td>
                                <td>{{$sp->new}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sp->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sp->id}}">Edit</a></td>
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
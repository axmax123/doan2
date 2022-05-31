 @extends('admin.layout.index')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">user
                            <small>{{$user->full_name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/user/sua/{{$user->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="NHập tên" value="{{$user->full_name}}" />
                            </div>
                             <div class="form-group">
                                <label>email</label>
                                <input class="form-control" name="email" placeholder="email" value="{{$user->email}}"/>
                            </div>
                             <div class="form-group">
                                <label>pass</label>
                                <input class="form-control" type="passwword" name="passwword" placeholder="passwword" value="{{$user->passwword}}"/>
                            </div>
                             <div class="form-group">
                                <label>sdt</label>
                                <input class="form-control" name="phone" placeholder="Số điện thoại" value="{{$user->email}}"/>
                            </div>
                             <div class="form-group">
                                <label>địa chỉ</label>
                                <input class="form-control" name="address" placeholder="địa chỉ" value="{{$user->address}}"/>
                            </div>

                      
                            <button type="submit" class="btn btn-default">Nhập</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
  @endsection
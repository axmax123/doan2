 @extends('admin.layout.index')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">thể loại
                            <small>thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                        <form action="admin/sanpham/them" method="POST">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                 <label>Id</label>
                                <input class="form-control" name="id" placeholder="id sản phẩm" />
                            </div>
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="name" placeholder="Tên sản phẩm" />
                            </div>
                            
                            <div class="form-group">
                                <label>Tên  loại</label>
                                <input class="form-control" name="id_type" placeholder="Tên  loại" />
                            </div>
                            
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" name="description" placeholder="mô tả" />
                            </div>
                            
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="unit_price" placeholder="giá" />
                            </div>
                             
                            <div class="form-group">
                                <label>giá sale</label>
                                <input class="form-control" name="promotion_peice" placeholder="giá sale" />
                            </div>
                            
                            <div class="image">
                                <label>Tên thể loại</label>
                                <input class="form-control" name="image" placeholder="ảnh" />
                            </div>
                            
                            <div class="form-group">
                                <label>new</label>
                                <input class="form-control" name="new" placeholder="new" />
                            </div>
                            
                          

                           
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
  @endsection
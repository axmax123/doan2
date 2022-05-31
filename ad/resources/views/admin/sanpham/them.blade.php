 @extends('admin.layout.index')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Sản phẩm
                            <small>thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
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
                        <form action="{{route('addSp')}}" method="POST">
                         <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="tensanpham" placeholder="Nhập tên sản phẩm" />
                            </div>
                             <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input class="form-control" name="giasanpham" placeholder="Nhập giá sản phẩm" />
                            </div>
                             <div class="form-group">
                                <label>Hình ảnh sản phẩm</label>
                                <input class="form-control"  name="hinhanhsanpham" placeholder="Nhập hình ảnh sản phẩm" />
                            </div>
                             <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <input class="form-control" name="motasanpham" placeholder="Mô tả sản phẩm"/>
                            </div>
                             <div class="form-group">
                                <label>ID sản phẩm</label>
                                <input class="form-control" name="idsanpham" placeholder="Nhập ID sản phẩm"/>
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
 @extends('admin.layout.index')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loai
                            <small>{{$loaisp->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/sanpham/sua/{{$loaisp->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Sản phẩm</label>
                                <select class="form-control" name="theloai">
                                   @foreach($theloai as $tl)
                                    <option 
                                    @if($loaisp->idtheloai == $tl->id)
                                    {{'selected'}}
                                    @endif 
                                    value="{{$tl->id}}">{{$tl->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="NHập tên" value="{{$loaisp->name}}" />
                            </div>
                             <div class="form-group">
                                <label>ID loại</label>
                                <input class="form-control" name="id_type" placeholder="Tên loại" value="{{$loaisp->id_type}}"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" name="description" placeholder="mô tả" value="{{$loaisp->description}}" />
                            </div>
                            
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="unit_price" placeholder="giá" value="{{$loaisp->unit_price}}"/>
                            </div>
                             
                            <div class="form-group">
                                <label>giá sale</label>
                                <input class="form-control" name="promotion_price" placeholder="giá sale"value="{{$loaisp->promotion_price}}" />
                            </div>
                            
                            <div class="image">
                                <label>Tên thể loại</label>
                                <input class="form-control" name="image" placeholder="ảnh" value="{{$loaisp->image}}"/>
                            </div>
                            
                            <div class="form-group">
                                <label>new</label>
                                <input class="form-control" name="new" placeholder="new" value="{{$loaisp->new}}"/>
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
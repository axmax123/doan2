<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Product;

class PageSPController extends Controller
{
    public function getDanhsach()
    {
    	$sanpham = Product::all();
    	return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }
    public function getThem()
    {
    	
    	return view('admin.sanpham.them');
    }
    public function postThem(Request $request)
    {
    	$this->validate($request,
    	[ 
    		'id'=>'required',
            'name'=>'required|min:3|max:100',
    		'id_type'=>'required',
    		'description'=>'required',
    		'unit_price'=>'required',
    		'promotion_price'=>'required',
    		'image'=>'required',
    		'new'=>'required'
    	],
    	[
    		'id.required'=>'bạn chưa nhập id',
            'name.required'=>'bạn chưa nhập',
    		'name.min'=>'tên thể loại 3 đến 100 kí tự',
    		'name.max'=>'tên thể loại 3 đến 100 kí tự',
            'id_type.required'=>'bạn chưa nhập id loại',
            'description.required'=>'bạn chưa nhập mô tả',
            'unit_price.required'=>'bạn chưa nhập giá',
            
            'new.required'=>'bạn chưa nhập mới'
    	]);
    	$sanpham = new Product;
    	$sanpham->id = $request ->id;
    	$sanpham->name = $request ->name;
    	$sanpham->id_type = $request ->id_type;
    	$sanpham->description = $request ->description;
    	$sanpham->unit_price = $request ->unit_price;
    	$sanpham->promotion_price = $request ->promotion_price;
    	$sanpham->image = $request ->image;
    	$sanpham->new = $request ->new;

    	$sanpham->save();
    	return redirect('admin/sanpham/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $theloai=ProductType::all();
        $loaisp = Product::find($id);
        return view('admin.sanpham.sua',['loaisp'=>$loaisp,'theloai'=>$theloai]);
    }
      public function postSua(Request $request,$id)
    {
        $theloai = Product::find($id);
        $this->validate($request,
            [
                'name'=>'required|unique:Product,name|min:3|max:100'
            ]
            ,[
                'name.required'=>'bạn chưa nhập',
                'name.min'=>'tên thể loại 3 đến 100 kí tự',
            'name.max'=>'tên thể loại 3 đến 100 kí tự',
                ]);
        $loaisp->id = $request ->id;
        $loaisp->name = $request->name;
        $loaisp->id_type = $request ->id_type;
        $loaisp->description = $request ->description;
        $loaisp->unit_price = $request ->unit_price;
        $loaisp->promotion_price = $request ->promotion_price;
        $loaisp->image = $request ->image;
        $loaisp->new = $request ->new;
        $loaisp->save();
        return redirect('admin/sanpham/sua/'.$id)->with('thongbao', ' sửa thành công');
}

 public function getXoa($id)
{
    $theloai = Product::find($id);
    $theloai -> DELETE();   
    return redirect('admin/sanpham/danhsach')->with('thongbao','bạn đã xoá thành công'); 
}



}
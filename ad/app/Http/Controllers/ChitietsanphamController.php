<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisanpham;
class ChitietsanphamController extends Controller
{
     public function getDanhSach()
    {
    		 $loaisanpham = loaisanpham::all();

            return view('admin.loaisanpham.danhsach',['loaisanpham' => $loaisanpham]);
    }
     public function getThem()
    {
    	return view('admin.theloai.them');
    }
    public function postThem(Request $request)
    {
    	$this->validate($request,
    	[ 
    		'name'=>'required|min:3|max:100'
    	],
    	[
    		'name.required'=>'bạn chưa nhập',
    		'name.min'=>'tên thể loại 3 đến 100 kí tự',
    		'name.max'=>'tên thể loại 3 đến 100 kí tự',
    	]);
    	$theloai = new loaisanpham;
    	$theloai->id = $request->id;
    	$theloai->tenloaisanpham = $request;
    	$theloai->save();
    	return redirect('admin/theloai/them')->with('thongbao','Thêm thành công');
    }
    public function getXoa($id)
    {
    $sanpham = sanpham::find($id);
    $sanpham -> DELETE();   
    return redirect('admin/sanpham/danhsach')->with('thongbao','bạn đã xoá thành công'); 
    }
    
}

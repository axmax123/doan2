<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\loaisanpham;

class SanphamController extends Controller
{
public function getDanhSach()
    {
             $sanpham = sanpham::all();

            return view('admin.sanpham.danhsach',['sanpham' => $sanpham]);
    }
public function getThem()
    {
    	return view('admin.sanpham.them');
    }
public function postThem(Request $request)
    {
    	$this->validate($request,
    	[ 
    		
            'tensanpham'=>'required|min:3|max:100',
    		'giasanpham'=>'required',
    		'hinhanhsanpham'=>'required',
    		'motasanpham'=>'required',
    		'idsanpham'=>'required'
    	],
    	[
            'tensanpham.required' => 'bạn chưa nhập',
    		'tensanpham.min' => 'tên thể loại 3 đến 100 kí tự',
    		'tensanpham.max' => 'tên thể loại 3 đến 100 kí tự',
            'idsanpham.required' => 'bạn chưa nhập id loại',
            'motasanpham.required' => 'bạn chưa nhập mô tả',
            'giasanpham.required' => 'bạn chưa nhập giá'
    	]);

    	$themsp = new sanpham;
    	$themsp->tensanpham = $request->tensanpham;
    	$themsp->giasanpham = $request->giasanpham;
    	$themsp->hinhanhsanpham = $request->hinhanhsanpham;
    	$themsp->motasanpham = $request->motasanpham;
    	$themsp->idsanpham = $request->idsanpham;


    	$themsp->save();
    	return redirect('admin/sanpham/danhsach')->with('thongbao','Thêm thành công');
    }

   
public function getSua($id)
    {
    	 $editsp = sanpham::find($id);
        return view('admin.sanpham.sua',['editsp'=>$editsp]);
    }
public function postSua(Request $request,$id)
    {
    	 $editsp = sanpham::find($id);
    	 $this->validate($request,
    	 	[

    	 		'motasanpham' => 'required'
    	 	],
    	 	[
    	 		'motasanpham' => 'Bạn chưa nhập mô tả sản phẩm'
    	 	]);
         
    	 $editsp->tensanpham  = $request->tensanpham;
    	 $editsp->giasanpham = $request->giasanpham;
    	 $editsp->hinhanhsanpham = $request->hinhanhsanpham;
    	 $editsp->motasanpham = $request->motasanpham;
    	 
    	 $editsp->save();

    	 return redirect('admin/sanpham/danhsach')->with('thongbao','sửa thành công');
    }
public function getXoa($id)
{
    $theloai = sanpham::find($id);
    $theloai -> DELETE();   
    return redirect('admin/sanpham/danhsach')->with('thongbao','bạn đã xoá thành công'); 
}

}

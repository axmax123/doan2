<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donhang;

class DonhangController extends Controller
{
     public function getDanhSach()
    {
    		 $donhang = donhang::all();

            return view('admin.donhang.danhsach',['donhang' => $donhang]);
    }
   
    public function getSua()
    {
            
    }
    
    
    public function getXoa($id)
    {
        $donhang = donhang::find($id);
        $donhang -> DELETE();   
        return redirect('admin/donhang/danhsach')->with('thongbao','bạn đã xoá thành công'); 
    }
}

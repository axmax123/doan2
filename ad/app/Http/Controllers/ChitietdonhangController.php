<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietdonhang;

class ChitietdonhangController extends Controller
{
    public function getDanhSach()
        {
            $chitiet = chitietdonhang::all();

    		return view('admin.chitietdonhang.danhsach',['chitiet' => $chitiet]);
        }
  
    public function getSua()
        {

        }
         public function getXoa($id)
    {
    $chitiet = chitietdonhang::find($id);
    $chitiet -> DELETE();   
    return redirect('admin/chitietdonhang/danhsach')->with('thongbao','bạn đã xoá thành công'); 
    }
}

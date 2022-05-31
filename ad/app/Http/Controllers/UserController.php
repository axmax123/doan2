<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth\AuthenticatesUsers;
use Session;
use user;

class UserController extends Controller
{
    public function getDangnhapAD(){
    	return view('admin.login');
    }
     public function postDangnhapAD(Request $req){

    	$this->validate($req,[
    			'username'=>'required',
    			'password'=>'required|min:3|max:30'
    	],[
    		'username.required'=>'bạn chưa nhập email',
    		'password.required'=>'bạn chưa nhập pass',
    		'password.min'=>'pass không được nhỏ hơn 3 kí tự',
    		'password.max'=>'pass không được lớn hơn 30 kí tự'
    	]);
    		if(Auth::attempt(['email'=>$req->email,'password'=>$req->password]))
    		{
    			return redirect('admin/sanpham/danhsach');
    		}
    		else
    		{
    			return redirect('admin/dangnhap')->with('thongbao','Đăng nhập  không thành công');
    		}
    }
}

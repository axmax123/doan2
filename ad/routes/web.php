<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('thu',function()
{
	return view('admin.layout.index');
}
);
use App\loaisanpham;
use App\sanpham;
use App\chitietdonhang;
use App\donhang;
use App\admin;
Route::get('admin/dangnhap',[
	'as'=>'login',
	'uses'=>'UserController@getDangnhapAD'
]);
Route::post('admin/dangnhap',[
	'as'=>'login',
	'uses'=>'UserController@postDangnhapAD'
]);


Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'chitietdonhang'],function(){
		//admin/chitietdonhang/danhsach
		Route::get('danhsach','ChitietdonhangController@getDanhSach');
		Route::get('xoa/{id}','ChitietdonhangController@getXoa');
	});
	Route::group(['prefix'=>'donhang'],function(){
		//admin/donhang/danhsach
		Route::get('danhsach','DonhangController@getDanhSach');
		Route::get('xoa/{id}','DonhangController@getXoa');
	});
	Route::group(['prefix'=>'sanpham'],function(){
		//admin/sanpham/them
		Route::get('danhsach','SanphamController@getDanhSach');
		
		Route::get('sua/{id}','SanphamController@getSua');
		
		Route::post('sua/{id}','SanphamController@postSua');


		Route::get('them','SanphamController@getThem');
		Route::post('them','SanphamController@postThem');

		Route::post('themsanpham',[
			'as'=>'addSp',
			'uses'=>'SanphamController@postThem'

		]);

		Route::get('xoa/{id}','SanphamController@getXoa');
	});
	Route::group(['prefix'=>'loaisanpham'],function(){
		//admin/loaisanpham/them
		Route::get('danhsach','ChitietsanphamController@getDanhSach');
		
		Route::get('them','ChitietsanphamControllerr@getThem');
		Route::post('them','ChitietsanphamControllerr@postThem');
	});
});

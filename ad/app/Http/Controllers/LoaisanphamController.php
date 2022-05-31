ư
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisanpham;
class LoaisanphamControler extends Controller
{
     public function getDanhSach()
    {
    		 $loaisanpham = loaisanpham::all();

            return view('admin.loaisanpham.danhsach',['loaisanpham' => $loaisanpham]);
    }
}

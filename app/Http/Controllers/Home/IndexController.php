<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $res = DB::select("select * from mk_course_cate where pid=0 and genera=1");
        $buttom = DB::select('select * from mk_buttom');

        return view('home.index',['res'=>$res,'buttom'=>$buttom]);
    }

}
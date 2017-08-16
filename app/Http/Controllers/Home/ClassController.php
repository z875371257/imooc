<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ClassController extends Controller
{
    // 课程列表页主页
    public function index(Request $request)
    {
        $res = DB::table('course_cate')->where('genera', 2)->get();

        if(!$request->input('c') == null){
             $class = DB::table('course_cate')
                  ->join('course', 'course_cate.cid', '=', 'course.pid')
                  ->where('cid', $request->input('c'))
                  ->paginate(20);
        } else {
            $class = DB::table('course_cate')
                  ->join('course', 'course_cate.cid', '=', 'course.pid')
                  ->where('genera', 2)
                  ->paginate(20);
        }

        return view('home.class',compact('class','res'));
    }

}
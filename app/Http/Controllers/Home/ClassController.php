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
        $c = $request->input('c');

        return view('home.class',compact('class','res','c'));
    }

    public function detail(Request $request)
    {
        $id = $request->input('id');
        $res = DB::table('course')->where('id', $id)->first();

        return view('home.classDetail', compact('res'));
    }

}
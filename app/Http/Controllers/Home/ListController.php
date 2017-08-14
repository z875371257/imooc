<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ListController extends Controller
{
    // 课程列表页主页
    public function index(Request $request)
    {
        // 方向
        $direction = DB::select("select cid,cname from mk_course_cate where pid=0 and genera=1");

        // 二级分类
        $classify = DB::select('select cid,cname from mk_course_cate where path REGEXP "^....$" and genera = 1');

        // 三级分类
        $type = DB::select('SELECT distinct(cname) from mk_course_cate where path REGEXP  "0,.,." and genera = 1');

        // 所有课程


        $courses = DB::table('course_cate')
              ->join('course', 'course_cate.cid', '=', 'course.pid')
              ->where('cname','like','%'.$request->input('fx').'%')
              ->orwhere(function ($query){
                  $query->where('generas','1')
                        ->where('path','REGEXP','0,.,.');
              })
              ->paginate(20);

        return view('home.list', compact('direction','classify','type','courses','request'));
    }

}
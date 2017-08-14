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

        global $requ;
        $requ = $request;
        $courses = DB::table('course_cate')
              ->join('course', 'course_cate.cid', '=', 'course.pid')
              ->where('path','REGEXP','0,.,.')
              ->orwhere(function ($query){
                  $query->where('generas',1)
                        ->where('cname','like','%'.$requ->input('fx').'%');
              })
              ->paginate(1);
#              ->get();
#         echo '<pre>';
#        var_dump($users);

#        $courses = DB::select("select * from `mk_course_cate` inner join `mk_course` on
#        `mk_course_cate`.`cid` = `mk_course`.`pid` and generas = 1  and path REGEXP  '0,.,.'");

        return view('home.list', compact('direction','classify','type','courses','request'));
    }

}
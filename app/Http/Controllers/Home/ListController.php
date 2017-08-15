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
        $type = DB::select('select distinct(cname) from mk_course_cate where path REGEXP  "0,.,." and genera = 1');
    +
        // 所有课程
        $courses = DB::select("select c.id,c.title,pic,price,difficulty,referral,NNT from mk_label_course lc inner join mk_course c on lc.cid = c.id inner join mk_label l on lc.lid = l.id where generas = 1");

        return view('home.list', compact('direction','classify','type','courses','request'));
    }

}
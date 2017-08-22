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
        // 所有课程
        if($request->input('fx') || $request->input('c') || $request->input('type')){
             if($request->input('fx')){
               $courses = DB::select("select * from mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 1 and path REGEXP '0,{$request->input('fx')},'");
               $classify = DB::select("select cid,cname,pid from mk_course_cate where path REGEXP '^....$' and genera = 1 and pid = {$request->input('fx')}");
               $type = DB::select("select distinct(cname) from mk_course_cate where path REGEXP  '0,{$request->input('fx')},.' and genera = 1");
            }
            if($request->input('c')){
               $courses = DB::select("select * from mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 1 and cc.pid = {$request->input('c')}");
               $classify = DB::select("select cid,cname,pid from mk_course_cate where path REGEXP '^....$' and genera = 1 and pid = {$request->input('fx')}");
               $type = DB::select("select distinct(cname) from mk_course_cate where path REGEXP  '0,.,.' and genera = 1 and pid = {$request->input('c')}");
            }
            if($request->input('type')){
               $courses = DB::select("select * from mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 1 and cname = '{$request->input('type')}'");
               $classify = DB::select("select cid,cname,pid from mk_course_cate where path REGEXP '^....$' and genera = 1");
               $type = DB::select('select distinct(cname) from mk_course_cate where path REGEXP  "0,.,." and genera = 1');
            }
        } else {
               $courses = DB::select("select * from mk_course where generas = 1");
               $classify = DB::select('select cid,cname,pid from mk_course_cate where path REGEXP "^....$" and genera = 1');
               $type = DB::select('select distinct(cname) from mk_course_cate where path REGEXP  "0,.,." and genera = 1');
        }

        $fx = $request->input('fx');
        $c = $request->input('c');
        $types = $request->input('type');
        $active = $request->input('active');

        $class = DB::select("select id,title,referral,NNT,price,pic from mk_course where generas = 2 and new = 1 ORDER BY id desc limit 0,4");
          // 方向
        $direction = DB::select("select cid,cname from mk_course_cate where pid=0 and genera=1");
        return view('home.list', compact('class','active','direction','classify','type','courses','request','fx','c','types'));
    }

    public function detail(Request $request)
    {
        $id = $request->input('c');
        $res = DB::table('course')->where('id', $id)->first();

        $section = DB::select("select s.title,s.description,s.sid from mk_course c inner join mk_section s on c.id = s.course_id where c.id = $id");

        return view('home.listDetail',compact('res','section'));
    }


}
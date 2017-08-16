<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CodingController extends Controller
{
    // 实战列表页主页
    public function index(Request $request)
    {
        $res = DB::table('course_cate')->where('genera', 3)->get();
        $label = DB::table('label')->where('genera', 3)->get();

        if($request->input('c') || $request->input('f')){
             if($request->input('c')){
                $coding = DB::select("select c.id,c.title,pic,price,difficulty,referral,NNT from mk_label_course lc inner join mk_course c on lc.cid = c.id inner join mk_label l on lc.lid = l.id where generas = 3 and l.titles = ? ", [$request->input('c')]);
             }

             if($request->input('f')){
                $coding = DB::select("select * from mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = 3 and cid = ?", [$request->input('f')]);
             }
        } else {
                $coding = DB::select("select * from mk_course c inner join mk_course_cate cc on c.pid = cc.cid where generas = ?", [3]);
        }

        return view('home.coding',compact('class','res','label','coding'));
    }

    public function detail(Request $request)
    {
        $id = $request->input('c');
        $res = DB::table('course')->where('id', $id)->first();

        return view('home.codingDetail',compact('res'));
    }

    public function chapter(Request $request)
    {
        
    }

}
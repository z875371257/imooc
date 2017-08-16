<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\course;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //底部管理列表页
        $courses = DB::table('course_cate')
                      ->join('course', 'course_cate.cid', '=', 'course.pid')
                      ->where('title','like','%'.$request->input('fx').'%')
                      ->paginate(20);

        return view('admin.course.index',compact('courses','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $arr = [
            '1' => '课程',
            '2' => '职业路径',
            '3' => '实战'
        ];

        $data = DB::table('course_cate')->distinct()->lists('genera');

        return view('admin.section.add',compact('arr','data'));

    }


    public function cates(Request $request)
    {

        if($request->input('genera') == '1') {
            $cates = DB::Table('course_cate')->get();
            $cateArr = DB::Table('course_cate')->lists('cname', 'cid');

            $newArr = [];
            foreach ($cates as $k => $v) {
                if (substr_count($v->path, ',') == 3 && $v->genera == 1) {
                    $tmp = explode(',', $v->path);
                    $newArr[$k]['cid'] = $v->cid;
                    $newArr[$k]['cname'] = $cateArr[$tmp[1]] . ' ---> ' . $cateArr[$tmp[2]] . ' ---> ' . $v->cname;
                }
            }
            return response()->json($newArr);

        } else if($request->input('genera') == '2'){
            $cates = DB::Table('course_cate')->where('genera', 2)->get();
            if($cates){
                return response()->json($cates);
            }else{
                return 1;
            }
        } else{
            $cates = DB::Table('course_cate')->where('genera', 3)->get();
            if($cates){
                return response()->json($cates);
            }else{}

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
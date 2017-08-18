<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\course;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class VedeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //视频管理
        $vedeo = DB::table('vedeo')
                      ->where('title','like','%'.$request->input('fx').'%')
                      ->paginate(3);

        return view('admin.vedeo.index',compact('vedeo','request'));
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

        return view('admin.vedeo.add',compact('arr','data'));

    }

    public function ajaxs(Request $request)
    {
        $id = $request->input('id');

        $section = DB::table('section')->where('course_id', $id)->get();
         return response()->json($section);
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
        $res = $request->except('_token','genera','vurl');
        $res['ctime'] = time();

         if (  $request->hasFile('vurl')) {
        //  获取上传文件的后缀名  $suffix
            $suffix = $request->file('vurl')->getClientOriginalExtension();

        //  $fileName 给上传文件起名字
            $fileName = time().rand(1111,9999) . '.'.$suffix;

        //  移动上传文件到 uplocads/vedeo目录
            $moves =  $request->file('vurl')->move('./uploads/vedeo/', $fileName );

        //  视频路径
            $savePath = '/uploads/vedeo/'.$fileName;

        //  保存路径到数据库中
            $res['vurl'] = $savePath;
        }

        if (  $request->hasFile('vpic')) {
        //  获取上传文件的后缀名  $suffix
            $suffixs = $request->file('vpic')->getClientOriginalExtension();

        //  $fileName 给上传文件起名字
            $fileNames = time().rand(1111,9999) . '.'.$suffixs;

        //  移动上传文件到 uplocads/vedeo目录
            $movess =  $request->file('vpic')->move('./uploads/', $fileNames );

        //  视频路径
            $savePaths = '/uploads/'.$fileNames;

        //  保存路径到数据库中
            $res['vpic'] = $savePaths;
        }

        $data = DB::table('vedeo')->insert($res);
        if ($data) {
            return redirect('/admin/vedeo/create')->with('success', '添加成功');
        } else {
            return back()->with('errors', '添加失败');
        }

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
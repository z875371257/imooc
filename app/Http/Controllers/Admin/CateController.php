<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = DB::table('course_cate')->
        select(DB::raw("*,concat(path,',',cid) as paths"))->
        orderBy('paths')->
        where('cname','like','%'.$request->input('search').'%')->
        paginate($request->input('num',5));

        foreach($res as $k => $v){
            //拆分path
            $data = explode(',',$v->path);
            $count = count($data)-1;
            $v->name = str_repeat('|---', $count).$v->cname;
        }

        return view('admin.cate.index',['res'=>$res, 'request'=>$request]);
    }

    /**
     * 分类添加页面
     */
    public function create()
    {
        // 将大类的值拿出来
        $data = DB::table('course_cate')->distinct()->lists('genera');
        return view('admin.cate.add', ['data'=>$data]);
    }

    /**
     *
     *  处理添加过来的类别
     */
    public function store(Request $request)
    {

        $res = $request->except('_token');

        if ($res['pid'] == '0') {

            $res['path'] = '0'.',';
        } else {
            $info = DB::table('course_cate')->where('cid', $res['pid'])->first();

            $res['path'] = $info->path.','.$info->cid;
        }

        $data = DB::table('course_cate')->insert($res);
        if ($data) {
            return redirect('/admin/cate');
        } else {
            return back();
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

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
            $v->cname = str_repeat('|---', $count).$v->cname;

        }

        return view('admin.cate.index',['res'=>$res, 'request'=>$request]);
    }

    /**
     * 分类添加页面
     */
    public function create()
    {
        // 将大类的值拿出来
        $arr = [
            '1' => '课程',
            '2' => '职业路径',
            '3' => '实战'
        ];
        $data = DB::table('course_cate')->distinct()->lists('genera');
        return view('admin.cate.add', ['data'=>$data,'arr'=>$arr]);
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

            $res['path'] = $info->path.$info->cid.',';
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
     *  分类修改页面
     */
    public function edit($id)
    {
        $res = DB::table('course_cate')->
        select(DB::raw("*,concat(path,',',cid) as paths"))->
        orderBy('paths')->
        get();

        //通过path判断
        foreach($res as $k => $v){

            //拆分path
            $data = explode(',',$v->path);
            $count = count($data)-1;
            $v->cname = str_repeat('|--', $count).$v->cname;
        }


        $data = DB::table('course_cate')->where('cid', $id)->first();

        return view('admin.cate.edit',['data'=>$data, 'res'=>$res]);

    }

    /**
     *  处理修改信息
     */
    public function update(Request $request, $id)
    {
        $res = $request->except('_token','_method');
        $cate = DB::table('course_cate')->where('cid', $id)->update($res);
        if($cate){
            return redirect('admin/cate');
        }else{
            return back()->with('msg','修改失败');
        }

    }
    /**
     *  删除分类
     */
    public function destroy($id)
    {
        //根据id查询有没有子类
        $cate = DB::table('course_cate')->where('cid', $id)->first();

        $path = $cate->path.$cate->cid.',';

        DB::table('course_cate')->where('path', 'like', $path.'%')->delete();
        $row = DB::table('course_cate')->where('cid', $id)->delete();

        if($row){
            $data = [
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }
        return $data;

     }

}

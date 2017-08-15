<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Link;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    /**
     * 网站链接的处理
     * @date  2017-8-14
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        dd($request)->all();
        //友情链接列表
        $res = Link::where('title','like','%'.$request->input('search').'%')->paginate($request->input('num',5));
        //获取分页数据
        $num = $request->input('num');
        $search = $request->input('search');
//        dd($res);
        //列表主页
        return view('admin.buttom.links',compact('res','num','search'));
    }

    /**
     * 添加记录表单
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //友情链接添加
        return view('admin.buttom.linkadd');
    }

    /**
     * 添加记录处理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return 1111;
        //表单数据提交处理
        $input = $request->except('_token');
        $input['addtime'] = time();
//        dd($input);
        //添加到数据表
        $res = Link::create($input);
        //判断
        if($res){
            return redirect('admin/link');
        } else {
            return back()->with('errors','添加失败');
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
     * 链接修改页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = link::find($id);
//        dd($edit);
        //跳转修改页
        return view('admin.buttom.linkedit',compact('edit'));

    }

    /**
     * 链接修改
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取修改的记录
        $update = $request->except('_token');
        //写入修改记录
        $res = Link::find($id)->update($update);
        //判断是否修改成功
        if($res){
            return redirect('admin/link')->with('success','修改成功');
        } else {
            return back()->with('errors','修改失败');
        }
    }


    /**
     * 删除一条记录
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //记录删除
        $res = Link::where('id','=',$id)->delete();
        //判断删除状态
        if($res){
            $data = [
                'status' => 0,
                'msg' => '删除成功',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '删除失败',
            ];
        }

        return $data;

    }
}

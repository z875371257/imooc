<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\Label;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //底部管理列表页
        //搜索分页
        $res = Label::where('title','like','%'.$request['search'].'%')->paginate($request->input('num',5));

        return view('admin.label.index',compact('res','request'));
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
        //底部管理添加页
        return view('admin.label.add', ['arr'=>$arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->except('_token');
        $re = DB::table('label')->where('genera', $input['genera'])->get();
        foreach ($re as $k=>$v){
            if($v->title == $input['title']){
                return back()->with('errors','添加失败,该标签已存在');
            }
        }
        $res = Label::create($input);
        if($res){
            return redirect('admin/label/create')->with('success', '添加成功');
        }else{
            return back()->with('msg','添加失败');
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
        //修改页面
        $edit = Label::find($id);

        return view('admin.label.edit',compact('edit'));
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
        $input = $request->except('_token','_method');

//        修改
        $res =  Label::find($id)->update($input);

        if($res){
            return redirect('admin/label');
        }else{
            return back()->with('errors','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Label::find($id);
        $row = $res::where('id', $id)->delete();

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

    public function generas(){

       $res = DB::select("select * from mk_label where genera = ?",[$_POST['genera']]);

       return response()->json($res);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\Buttom;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ButtomController extends Controller
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
       $res = Buttom::where('title','like','%'.$request['search'].'%')->paginate($request->input('num',5));
       $num = $request->input('num');
       $search = $request->input('search');
//       dd($num);
//        $res = Buttom::paginate(5);
//        dd($res);
//        dd($request->all());
        return view('admin.buttom.index',compact('res','search','num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //底部管理添加页

        return view('admin.buttom.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return 1111;
//        dd($request);
        $input = $request->except('_token');
//        dd($res);
        $res = Buttom::create($input);
        if($res){
            return redirect('admin/buttom');
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
        $edit = Buttom::find($id);
//        dd($edit);
        return view('admin.buttom.edit',compact('edit'));
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
//        dd($request->all());
        $input = $request->except('_token','_method');
//        dd($input);
//        修改
        $res =  Buttom::find($id)->update($input);
//        dd($input);

       if($res){
           return redirect('admin/buttom');
       }else{
           return back()->with('msg','修改失败');
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
        //
    }
}

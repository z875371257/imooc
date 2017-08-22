<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //意见反馈页
//       $re = DB::select('select * from mk_suggest');
//       dd($re);
        $res = DB::table('suggest')->where('content','like','%'.$request['search'].'%')->paginate($request->input('num',5));
        $num = $request->input('num');
        $search = $request->input('search');
        return view('admin.suggest.index',compact('res','num','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //处理意见

        $edit = DB::table("suggest")->where('id',$id)->first();


        return view('admin/suggest/edit',compact('edit'));
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

        $update = $request->except('_token','_method');
//        dd($update);
        $res = DB::table('suggest')->where('id',$id)->update($update);
        if($res){
            return redirect('admin/suggest');
        }else{
            return back()->with('msg','处理失败');
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
        //删除一条记录
        $res = DB::table('suggest')->where('id',$id)->delete();
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

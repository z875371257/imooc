<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $res = DB::table('orders')
               ->leftJoin('home_user','orders.uid','=','home_user.id')
               ->where('username','like','%'.$request->input('search').'%')
               ->paginate($request->input('num',5));
        

        $status = ['0'=>'未付款','已付款'];
        return view('admin.order.index',['res'=>$res,'request'=>$request,'status'=>$status]);
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
       $res = DB::table('orders')
       ->leftjoin('address','orders.uid','=','address.uid')
       ->where('orders.uid','=',$id)
       ->get();
       
       return view('admin.order.edit',['res'=>$res]);
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
        $res = $request->except('_method','_token');

        $res1 = DB::table('address')
                ->where('uid','=',$id)
                ->update(['name'=>$request->name,'telephone'=>$request->telephone,'details'=>$request->details]);

        $res2 = DB::table('orders')
                ->where('uid','=',$id)
                ->update(['status'=>$request->status]);


        if($res1 || $res2)
        {
            return redirect('admin/order');
        }else{

            return back()->with('errors','您没有做任何修改');
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

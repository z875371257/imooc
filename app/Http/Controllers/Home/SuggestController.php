<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\suggest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //意见反馈页面
        return view('home.about.suggest');

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
        //保存反馈记录
//        dd($request->all());
        $suggest = $request->except('_token');
//        dd($suggest);
        //保存
        $res = Suggest::create($suggest);
//        dd($suggest);
        //判断
        if(!$res){
            //提交失败返回
            echo "<script type='text/javascript'>alert('提交失败,请重试')</script>" ;
            header('refresh:1;url=/suggest.php');
//            return back();
        }else{

            echo "<script type='text/javascript'>alert('感谢你的建议，我会努力让自己变得高大上')</script>" ;
            header('refresh:1;url=/index.php');
            die;
        }

//       return redirect()->route('index');
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

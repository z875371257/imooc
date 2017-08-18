<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Home_User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * 显示前台列表页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//       获取所有的用户信息
        $users = Home_User::all();

//        dd($users);


//      判断是否有搜索条件上传  Input门面获取name     如果有添加到用户模型查询中   且将查询的条件分配到视图到 最终显示到搜索框中
        $keywords = Input::get('keywords');
//      dd($keywords);

//      判断是否有分页条页上传  Input     如果有添加到用户模型查询中   且将查询的条件分配到视图中  利用三元表达式判断是否上传分页条件
        $records = Input::get('record');
        $record = empty(!$records) ? $records : 5;
//        dd($record);

//      显示带有一定条件所查询的用户信息  模糊查询  分页  ID 排序
        $users = Home_User::where('username', 'like', '%' . $keywords . '%')->orderBy('id', 'asc')->paginate($record);
//        dd($users);
//      定义两个空字符串用来存放 status auth 的数字
//        $str1 = '';
//        $str2 = '';
//        foreach ($users as $k => $v) {
//            $str1 .= $v['status'];
//            $str2 .= $v['auth'];
//        }

//      自定义一个函数  用来转换 将status auth.php 的数字 为汉字  app/libraries/function/status.php    auth.php.php
//      调用 getStatus() getAuth()  返回到视图上  echo
//        echo $status = getStatus($str1);
//        echo $auth = getAuth($str2);

//      dd($users);   分配数据 数组对象  users   keywords record status auth
        return view('home.user.index', compact('users', 'record', 'keywords'));

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
//       echo $id;

            $homes = Home_User::find($id);
            $name = $homes->username;
            $details = Home_User::find($id)->details;
//            dd($details);

            $str = '';
            if ( $details ) {

                $str = '<table class="layui-table"><tr><th>详情ID</th><th>用户ID</th><th>性别</th><th>电话</th><th>昵称</th><th>职位</th><th>城市</th><th>积分</th></tr>';

                $str .= '<tr><td>'.$details->id.'</td><td>'.$details->home_user_id.'</td><td>'.$details->sex.'</td><td>'.$details->telephone.'</td><td>'.$details->nickname.'</td><td>'.$details->positions.'</td><td>'.$details->city.'</td><td>'.$details->total.'</td></tr>';

                $str .= '</table>';
                return $str;

            }  else {

                $str .= '用户尚未完善个人信息';
                return $str;
            }

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

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index.index');
    }

    // 密码修改页面
    public function edit()
    {
        return view('admin.index.edit');
    }
    // 修改密码处理
    public function update(Request $request)
    {
        $res = session('user');
        $id = (int)$res->id;

        $this->validate($request, [
            'oldpasswd' => "required",
            'password' => 'required|regex:/^\w{6,10}$/',
            'repassword'=>'same:password',
        ],[
            'oldpasswd.required'=>'原密码不能为空',

            'password.required'=>'新密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repassword.same'=>'两次密码不一致',
        ]);

//        $res = $request->except('_token');
//        $ses = session('user');
//        $arr = DB::table('admin_user')->where('id', $ses->id)->first();
//        $mpasswd = Crypt::decrypt($arr->password);
//        if($res['oldpasswd'] != $mpasswd)
//        {
//            return back()->with('msg', '原密码错误');
//        }
    }


    // 分页传过来的Ajax在这拿列表数据
    public function ajaxcate(Request $request)
    {
        $res = DB::table('course_cate')->
        select(DB::raw("*,concat(path,',',cid) as paths"))->
        orderBy('paths')->
        where('genera', $request->input('genera'))->
        get();

        //通过path判断
        foreach($res as $k => $v){
            //拆分path
            $data = explode(',',$v->path);
            $count = count($data)-1;
            $v->cname = str_repeat('|---', $count).$v->cname;
        }
        return $res;
    }
}

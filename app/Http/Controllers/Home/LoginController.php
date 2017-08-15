<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Register;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    /**
     * 显示登录页面
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('home.login.login');
    }
    public function doLogin()
    {
//       1.  表单验证

//       2.  表单验证成功

//       3.  根据用户登录提交的内容 判断数据中是否有改用户

        $input = Input::except('_token');

        $user = Register::where('username', $input['username'] )->first();

        if(!$user){
            return back()->with('error','无此用户');
        }

        if(Crypt::decrypt($user->password) != trim($input['password']) ){
            return back()->with('error','密码错误');
        }

//       4.  保存用户信息到session
        session(['user'=>$user]);

        return redirect('/');



//       5.  成功 跳转

    }

}

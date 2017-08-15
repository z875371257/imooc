<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Register;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /**
     * 显示前台注册页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.register.index');
    }
    /**
     * 处理注册页面提交的数据
     *
     * @return \Illuminate\Http\Response
     */

    public function register()
    {
//        接收注册页面提交的数据
        $info = Input::except('_token','password1');

//        对密码加密
        $pwd = Input::get('password');

        $pwd = Crypt::encrypt($pwd);
        $info['password'] = $pwd;

//        保存数据到数据库中
        $user = Register::create($info);

//        注册成功  注册失败
        if ( $user ) {
            return redirect('home/login');
        }  else {
            return back()->with('errors','注册失败');
        }
    }

}

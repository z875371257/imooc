<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Home_User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function login()
    {
//        获取登录数据
//        根据数据用户名 判断用户是否存在数据库中
        $input = Input::except('_token');

        $user = Home_User::where('username', $input['username'])->first();


     if ( ! $user) {
         return back()->with('error','用户不存在');
     }

     if ( trim($input['password']) != Crypt::decrypt($user->password) ) {
        return back()->with('error', '密码不正确');
     }

//    登录成功 保存信息  跳转到前台首页

        session(['user'=>$user]);

//        dd( session()->get('user')->username);
        return redirect('/');

    }
}

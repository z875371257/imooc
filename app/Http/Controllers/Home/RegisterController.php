<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Home_User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /**
     * 接收注册表单提交的数据
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
//  1.获取数据
        $input = Input::except('_token');

//  2.表单验证

//  3.处理数据  加密 $input['password']  权限默认给1  注册时间
        $input['password']  = Crypt::encrypt($input['password']);
        $input['auth'] = 1;
        $input['addtime'] = time();

//  4.Home_user模型   添加用户到数据库中
        $user = Home_User::create($input);

        if( $user){

            echo "<script>alert('注册成功!');window.location='/'</script>";

        } else {
            return back()->with('error', '注册失败');
        }


    }


}

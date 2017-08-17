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

//  2.表单验证  成功继续下面  失败  带着提示信息  将提交的数据还显示到表单中

//  3.处理数据  加密 $input['password']  权限默认给1  注册时间
        $input['password']  = Crypt::encrypt($input['password']);
        $input['auth'] = 1;
        $input['addtime'] = time();

//  4.Home_user模型   添加用户到数据库中
        $user = Home_User::create($input);

        if( $user){

            echo "<script>alert('注册成功,请登录!');window.location='/'</script>";

        } else {
            return back()->with('error', '注册失败');
        }

    }

    //处理  ajax 发送过来  username
    public function checkName()
    {
        //        获取 ajax 发过来的值
        $input = Input::only('username');


        //        判断用户是否存在
        $username = $input['username'];

        $user = Home_User::where('username', $username)->first();



        if ($user) {
            $data = [
                'status'=>0,
                'msg'=>'用户已存在',
            ];
        }   else {
            $data = [
                'status'=>1,
                'msg'=>'用户不存在',
            ];
        }
        return response()->json($data);
    }

//处理  ajax 发送过来  email

    public function checkEmail()
    {
        //        获取 ajax 发过来的值
        $input = Input::only('email');


        //        判断用户是否存在
        $emailInfo = $input['email'];

        $email = Home_User::where('email', $emailInfo)->first();

        if ($email) {
            $data = [
                'status'=>0,
                'msg'=>'邮箱已存在',
            ];
        }   else {
            $data = [
                'status'=>1,
                'msg'=>'邮箱不存在',
            ];
        }
        return $data;
//        return response()->json($data);
    }


}

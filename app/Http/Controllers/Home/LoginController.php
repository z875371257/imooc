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

//    处理用户登录信息
    public function login()
    {
//        获取登录数据

//        表单验证

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

            session(['users'=>$user]);
    
            return redirect('/');

    }

//  处理用户退出
    public function logout(Request $request )
    {

//   从session中移走用户的信息   $request->session()->forget('key');
//        return redirect('dashboard')->with('status', 'Profile updated!');

        $userInfo = $request->session()->flush();


        if ($userInfo) {

            return redirect('/')->with('status', '退出成功');

        }   else {

            return back()->with('error', '退出失败');

        }

        session(['user'=>$user]);
        
        return redirect('/');

        // dd( session()->get('user')->username);
        

    }


//处理  ajax  验证用户名
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
                'msg'=>'0000',
            ];
        }   else {
            $data = [
                'status'=>1,
                'msg'=>'1111',
            ];
        }
        return response()->json($data);
#        return $data;
//        return response()->json(['name' => 'Abigail', 'state' => 'CA']);

    }




    //处理  ajax  验证密码
    public function checkPassword()
    {
        //        获取 ajax 发过来的值
        $input = Input::only('password','username');


        //        判断密码是否存在
        $password = $input['password'];
        $username = $input['username'];

        $user = Home_User::where('username', $username)->first();


        if (Crypt::decrypt($user->password) == $password ) {
            $data = [
                'status'=>0,
                'msg'=>'密码箱等',
            ];
        }   else {
            $data = [
                'status'=>1,
                'msg'=>'密码不一致',
            ];
        }

        return response()->json($data);
#        return $data;
//      return response()->json(['name' => 'Abigail', 'state' => 'CA']);

    }

}

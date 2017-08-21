<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
require_once app_path(). '\Org\code\Code.class.php';
use App\Org\code\Code;


class LoginController extends Controller
{

    // 后台登录界面
    public function index()
    {
        return view('admin.login.index');
    }

    // 生成验证码
    public function code()
    {
        $code = new Code();
        return $code->make();
    }

    // 验证码设置
    public function captcha($tmp)
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(6);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }
    // 处理登录操作
    public function dologin()
    {
        // session 里的验证码
        $code = Session::get('code');

        // 去除token
        $data = Input::except('_token');

        // 用户名验证
        $res = DB::table('admin_user')->where('username', $data['username'])->first();
        if(!$res){
            return back()->with('error1', '此用户不存在');
        }
        // 密码验证
        if($data['password'] != Crypt::decrypt($res->password))
        {
            return back()->with('error2', '密码错误');
        }
        //验证码验证
        if(strtoupper($data['code']) != strtoupper($code)){
            return back()->with('error3', '验证码不正确');
        }
        // 将值存入session
        session(['user'=>$res]);
        return redirect('admin/index');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('admin/login');
    }

}

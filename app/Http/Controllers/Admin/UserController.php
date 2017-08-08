<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * 方法的功能： 返回后台用户添加页面
     * @author:     github.airline
     * @date:       2017.08.05 14:07
     * @param       方法需要的参数 无
     * @return      显示一个添加后台用户表单
     *
     */
    public function create()
    {
//        返回后台用户添加页面
                return view('admin.user.add');
    }

    /**
     * 方法的功能： 处理添加后台用户表单数据,保存到数据库
     * @author:     github.airline
     * @date:       2017.08.05 14:07
     * @param       Request   请求对象类
     * @param       $request   请求对象类实例化的对象
     * @return      显示一个添加后台用户表单
     *
     */
    public function store(Request $request)
    {
//       (1) 接收表单提交过来的数据 去掉_token
                $input = ($request->except('_token'));
//                dd($input);

//       (2) 通过validate类进行表单验证   $input要验证的内容   $rule 验证的规则  $message 验证错误的信息
                $rule = [
                    'username' => 'required|between:6,12',
                    'password' => 'required|between:6,12',
                    'telephone' => 'required',
                ];
                $message = [
                    'username.required' => '账号不能为空!',
                    'username.between' => '账号必须在6-12位之间!',
                    'password.required' => '密码不能为空!',
                    'password.between' => '密码必须在6-12位之间!',
                    'telephone.required' => '手机号不能为空!',
                ];

//      (3) 执行 Validatoor::make()
                 $validator = Validator::make($input,$rule,$message);

//      (4) 如果表单验证失败  下面的代码不执行    跳转到添加用户页面 并把表单验证错误的信息带过去
                  if ( $validator->fails() ) {
                        return back()->withErrors($validator)->withInput();
                    }

//      (5) 表单验证通过, 处理表单提交数据

//      (6) 通过 GD库 对上传过来的密码进行加密  位数为255   先引入 Crypt类  访问静态的成员方法encrypt() 进行加密
                  $input['password'] = Crypt::encrypt($input['password']);
//      (7) 获取用户的IP REMOTE_ADDR  添加用户时间 REQUEST_TIME
                  $input['ip'] = ($_SERVER['REQUEST_TIME']);
                  $input['addtime'] = ($_SERVER['REMOTE_ADDR']);
//                  dd($input);

//      (8) 判断是否有文件上传
        //        dd($request->hasFile('uface'));

                    if (  $request->hasFile('uface')) {
//      (8) 获取上传文件的后缀名  $suffix
                        $suffix = $request->file('uface')->getClientOriginalExtension();
//                    dd($suffix);

//      (9) $fileName 给上传文件起名字
                        $fileName = time().rand(1111,9999) . '.'.$suffix;
//                     dd($fileName);

//      (10) 移动上传文件到 uplocads目录
                        $moves =  $request->file('uface')->move('./uploads/', $fileName );
//                        dd($moves);
//      (11) 图片路径
                         $savePath = './uploads'.$fileName;

//       (12) 保存路径到数据库中
                         $input['uface'] = $savePath;
//                      dd($input);

                    }


//      (9) 添加用户   利用Eloquent ORM 模型      在 app\Http\Model\user.php
                          $data = User::create($input);
//          dd($data);

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

    /**
     * 方法的功能：处理后台添加用户发送ajax的信息
     * @author:     github.airline
     * @date:       2017.08.05 14:07
     * @param       方法需要的参数 无
     * @return      $data
     *
     */
    public function checkName()
    {
//        接收ajax请求  获取文本框的值
                $username = Input::get('username');
//        根据用户模型 查询用户是否存在于数据中   如果用户已存在返回用户模型实例   用户不存在返回null
                $user = User::where('username',$username)->first();
//         根据$user 结果做出判断
                 if ( $user ) {
                     $data = [
                         'status'=>0,
                         'msg'=>'用户已存在!'
                     ];
                 }  else {
                     $data = [
                         'status'=>1,
                         'msg'=>'用户不存在!'
                      ];
                 }
//                 返回json字符串
                 return response()->json($data);

    }

}

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
     * 方法的功能： 显示后台用户列表页
     * @author:     github.airline
     * @date:       2017.08.05 14:07
     * @param       方法需要的参数 无
     * @return      用户信息
     */
    public function index(Request $request)
    {
//       获取所有的用户信息
        $users = User::all();

//        dd($users);


//      判断是否有搜索条件上传  Input门面获取name     如果有添加到用户模型查询中   且将查询的条件分配到视图到 最终显示到搜索框中
        $keywords = Input::get('keywords');
//      dd($keywords);

//      判断是否有分页条页上传  Input     如果有添加到用户模型查询中   且将查询的条件分配到视图中  利用三元表达式判断是否上传分页条件
        $records = Input::get('record');
        $record = empty(!$records) ? $records : 5;
//        dd($record);

//      显示带有一定条件所查询的用户信息  模糊查询  分页  ID 排序
        $users = User::where('username', 'like', '%' . $keywords . '%')->orderBy('id', 'asc')->paginate($record);
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
        return view('admin.user.index', compact('users', 'record', 'keywords','request'));
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
            'username' => 'required|between:6,12|unique:admin_user,username',
            'password' => 'required|between:6,12',
            'telephone' => 'required',
        ];
        $message = [
            'username.required' => '账号不能为空!',
            'username.between' => '账号必须在6-12位之间!',
            'username.unique' => '用户名已存在!',
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
                  $input['addtime'] = ($_SERVER['REQUEST_TIME']);
                  $input['ip'] = ($_SERVER['REMOTE_ADDR']);
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
                         $savePath = '/uploads/'.$fileName;

//       (12) 保存路径到数据库中 绝对路径
                         $input['uface'] = $savePath;
//                      dd($input);

                    }


//      (9) 添加用户   利用Eloquent ORM 模型      在 app\Http\Model\user.php
                          $data = User::create($input);
//          dd($data);

//      (10)添加成功跳转到用户列表  /admin/user  失败返回到添加页面

        if ($data) {
            return redirect('admin/user');
        } else {
            return back() -> with('errors', '添加用户失败');
        }

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
//        echo $id; 验证路由通不通

//        通过模型获取一个模型实例
        $user = User::find($id);
//        将数据分配到修改视图中

        return view('admin.user.edit', compact('user'));

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
//        0. 发送修改数据之前,先进行发送ajax确认用户是否已存在

//        1.表单认证

//        2.接收id    和修改的数据   echo  $id;  Input::
//          echo $id;

//        3.处理上传的修改数据
        $data = Input::except('_token', '_method');

//        5.找到修改ID的模型实例 执行修改
        $res = User::where('id', '=', $id)->update($data);

//        6.对结果进行判断  成功1  跳转到用户列表页  失败带着添加失败信息到修改页面
        if ($res) {
            return redirect('admin/user');
        } else {
            return back()->with('errors', '修改失败');
        }
    }

    /**
     * 接收删除用户的信息
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = User::where('id', $id)->delete();

        if ( $res) {
            $data = [
              'status'=> 0,
              'msg'=> '删除成功',
            ];
        }   else {
            $data = [
                'status'=> 1,
                'msg'=> '删除失败',
            ];
        }

        return response()->json($data);

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
    
//    权限
    public function auth($uid)
    {
        $user = User::where('id', $uid)->first();
//        dd($user->auth);

        $str = '<form class="layui-form" action="/admin/doauth/{$user->id}" method="post">
    <div class="layui-form-item">
      <label class="layui-form-label"></label>
          <div class="layui-input-block">
            <input type="radio" name="auth" value="1" title="普通管理员">普通管理员<br>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="radio" name="auth" value="2" title="一般管理员" >一般管理员<br>
            <input type="radio"  name="auth" value="3" title="超级管理员" >超级管理员<br>
          </div>
     </div>

    <div class="layui-form-item" style="margin:20px;auto">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
          </div>
    </div>
</form>';
        return $str;
    }


//    处理权限更换请求
    public function doAuth($uid)
    {
        $auth = Input::except('auth');
        echo $uid;
        dd($auth);
    }

    

}

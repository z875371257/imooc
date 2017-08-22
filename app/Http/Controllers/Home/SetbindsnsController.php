<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Details;
use App\Http\Model\Home_User;
use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SetbindsnsController extends Controller
{
    /**
     * 返回个人信息页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = session()->get('users')->id;
        $users = DB::select("select * from mk_home_user u inner join mk_details d on u.id = d.home_user_id where u.id = {$id}")[0];

        return view('home.setbindsns.index',compact('users'));
    }

    public function setprofile(Request $request)
    {

//        $res = $request->all();
//        var_dump($res);
        $res = $request->except('_token');
////        dd($res);
        $detail = Details::where('home_user_id', session('users')->id)->update($res);
////         dd($detail);
        if ($detail ) {
            echo "<script>location.href='/home/users/set';alert('修改成功');</script>";
        }   else {
            echo "<script>location.href='/home/users/set';alert('修改失败');</script>";
        }

    }

    public function passedit()
    {

        return view('home.setbindsns.passedit');
    }

    public function passupdate()
    {

        $id = session('users')->id;
        $input = Input::except('_token');
//        dd($input['password']);
        $res = Home_User::where('id',$id)->first();

       if ( Crypt::decrypt($res->password) ==$input['password']  ) {
             $data = [
                'status' => 0,
                'msg' => '密码一致',
            ];
       }    else {
          $data = [
               'status' => 1,
               'msg' => '密码不一致',
           ];
       }
        return $data;

    }


    public function dopassupdate()
    {
       $id  = session('users')->id;

       $input = Input::only('password');

       $password = Crypt::encrypt($input['password']);

       $input['password'] = $password;

       $res = Home_User::where('id', $id)->update($input);


       if ($res ) {
           echo "<script>location.href='/home/users/set';alert('修改成功');</script>";
       }    else {
           echo "<script>location.href='home/users/passedit';alert('修改失败');</script>";
       }

    }

}

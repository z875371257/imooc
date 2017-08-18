<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use Cart;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //确认订单页面
    public function index()
    {   
        //购物车全部记录
        $carts = Cart::content();
        // dd($carts);
        //购物车总额 不含税
        $total = Cart::subtotal();
        //购物车商品数量
        $count = Cart::count();
     
        return view('home.order',['carts'=>$carts,'total'=>$total,'count'=>$count]);
    }

    //提交订单信息
    public function doOrder()
    {
       //获取购物车中的全部信息
        $carts = Cart::content();
       //购物车总额 不含税
        $total = Cart::subtotal();
       //购物车商品数量 
        $count = Cart::count();

        foreach($carts as $cart){
            //定义一个空数组
            $gid = [];
            $gid[] = $cart->id;
            //把商品ID变成字符串
            $a = implode(',',$gid);
        }
        //生成订单编号
        $oid = time().rand(1111,9999);
        //获取用户的ID
        $uid = DB::table('home_user')->where('username',session()->get('user')->username)->value('uid');
        //把订单插入数据库中
        DB::table('order')->insert([]);

        return back();

    }
}

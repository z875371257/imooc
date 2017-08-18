<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use Cart;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
    
    public function index($id)
    {   

        //购物车全部记录
        $carts = Cart::content();
        // dd($carts);
        //购物车总额 不含税
        $total = Cart::subtotal();
        //购物车商品数量
        $count = Cart::count();
     
        return view('home.pay',['carts'=>$carts,'total'=>$total,'count'=>$count,'oid'=>$id]);
    }

    //确认购买
    public function doPay($id)
    {
        //修改订单表的购买状态
        $res = DB::table('orders')->where('oid',$id)->update(['status'=>1]);

        return redirect()->route('success');
       
    }

    //支付成功
    public function success()
    {   
        DB::table('cart')->where('uid',session()->get('users')->id)->delete();
        //清空购物车
        Cart::destroy();
        return view('home.success');
    }

}

<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
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
         
       //定义一个空数组
        $cid = array();
       //获取购物车中的全部信息
        $carts = Cart::content();
       //购物车总额 不含税
        $total = Cart::subtotal();
       //购物车商品数量 
        $count = Cart::count();

       //根据用户ID查询出购买的商品ID
       $uids = DB::table('cart')->where('uid',session()->get('users')->id)->get();
        

       foreach($uids as $k => $v)
       {
         
         $cid[] = $v->cid;
        
       }
         //对商品ID进行数组变形
        $cid = implode(',',$cid);

        //生成订单编号
        $oid = time().rand(1111,9999);

        //获取用户的ID
        $uid = session()->get('users')->id;

        //把订单插入数据库中
        $res = DB::table('orders')->insert(['oid'=>$oid,'ormb'=>$total,'ocnt'=>$count,'gid'=>$cid,'uid'=>$uid,'status'=>0,'addtime'=>time()]);
        

        if($res)
        {   
            return redirect()->route('pay',[$oid]);
        }

    }

    //购买历史记录
    public function myorder()
    {   
        if(session()->get('users')){
            
            //用户ID
            $uid = session()->get('users')->id;
            //根据用户ID查询出用户的购买订单
            $orders = DB::table('orders')->where('uid',$uid)->get();
            if($orders){
            foreach($orders as $k => $v)
            {  
               $gid = explode(',',$v->gid);
            }
             
            //根据商品ID查出商品信息
            foreach($gid as $k => $v)
            {
                $goods[] = DB::table('course')->where('id',$v)->get();
            }
            
            return view('home.myorder',['orders'=>$orders,'goods'=>$goods]);

           } else {
              return view('home.myorder',['orders'=>$orders]);
           }
        } else {

            return back();
        }

      

    }

    //删除购买记录
    public function delOrder($id)
    {
        $res = DB::table('orders')->where('oid',$id)->delete();
       
        if($res){
            $data = [
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }
        return $data;
    }
}

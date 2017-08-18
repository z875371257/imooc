<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use Cart;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {  

       if(session()->get('users')->username){

        //购物车全部记录
        $carts = Cart::content();
        // dd($carts);
        //购物车总额 不含税
        $total = Cart::subtotal();
        //购物车商品数量
        $count = Cart::count();
     
        return view('home.cart',['carts'=>$carts,'total'=>$total,'count'=>$count]);

       } else {

        //没有登录时显示购物车
        return view('home.cart');
       }
      
    }
    
    //加入购物车
    public function addCart($id)
    {   
        
        $goods = DB::table('course')->where('id',$id)->first();
      
        $good = (array)$goods;
        //跟商品ID查询数据库购物车表中是否存在这个商品
        $carts = DB::table('cart')->where('cid',$id)->first();

        if($carts != null){
            if($carts->cid == $id){


                return back();
             } 
           }else {
               

               if(session()->get('user')->username){

                //查询出用户的uid   
                $uid = DB::table('home_user')->where('username',session()->get('user')->username)->value('uid');

               //把这个商品存进购物车表中

                DB::table('cart')->insert(['uid'=>$uid,'cid'=>$id,'price'=>$good['price'],'addtime'=>time()]);

                /*Cart::add(array('id'=>$good['id'],'name'=>$good['title'],'price'=>$good['price'],'qty'=>1));*/
                Cart::add($good['id'],$good['title'],1,$good['price'],array('pic'=>$good['pic']));
            }

             return redirect()->route('cart');

         }



     }
      
  //清空购物车操作
    public function delCart($id)
    {
        $rowId = $id;
        //从数据库移除单条信息
        $res = Cart::get($rowId);
        
        DB::table('cart')->where('cid',$res->id)->delete();
        //移除单条购物车记录
        
        Cart::remove($rowId);

        return back();
    }
    


         
}

    


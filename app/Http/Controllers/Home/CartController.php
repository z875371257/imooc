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
       if(session()->get('user')->username){

        //购物车全部记录
        $carts = Cart::content();
        // dd($carts);
        //购物车总额 不含税
        $total = Cart::subtotal();
        //购物车商品数量
        $count = Cart::count();
     
        return view('home.cart',['carts'=>$carts,'total'=>$total]);

       } else {

        //没有登录时显示购物车
        return view('home.cart');
       }
      
    }
    
    //加入购物车
    public function addCart($id)
    { 
        //判断购物车表中有没有存
        $cart = DB::table('cart')->where('cid',$id)->first();

        if($cart['cid'] == $id){

         

        }
        

        if(session()->get('user')->username){

            /*Cart::add(array('id'=>$good['id'],'name'=>$good['title'],'price'=>$good['price'],'qty'=>1));*/
            Cart::add($good['id'],$good['title'],1,$good['price'],array('pic'=>$good['pic']));
        }

         return redirect()->route('cart');

         
    }

    //清空购物车操作
    public function delCart($id)
    {
        //移除单条购物车记录
        $rowId = $id;
        $res = Cart::remove($rowId);
        
        return back();
    }
}

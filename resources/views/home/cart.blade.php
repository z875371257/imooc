@extends('layout.list')
@section('title','购物车')
@section('content')
 <style type="text/css">
   body-main {
    min-height: 750px;
   }
   
 </style>
<div class="body-main">


<div class="cart-header">
	<div class="cart-header-warp clearfix">
		<div class="cart-title left clearfix">
			<h1 class="left">我的购物车</h1>
			@if(!empty(session()->get('user')->username))
			<div class="left js-number-box-cart">
		共<span class="js-coures-num">1</span>门，已选择<span class="js-choice-num">1</span>门
	</div>
            @endif
		</div>
		<div class="right">
			
	<div class="clearfix">
		<span class="left"><a href="/myorder" class="js-myorderbtn">我的订单历史</a></span>
		<span style="display: none;" class="left num js-order-num">0</span>
	</div>

		</div>
	</div>
</div>
@if(!empty(session()->get('user')->username))
  <div class="cart-body" id="cartBody">
		<div class="cart-body-title clearfix">

		
		<div class="item-2 l">
			<span class="c-4d555d">课程</span>
		</div>
		
		<div class="item-3 l">
			<span class="c-4d555d">金额</span>
		</div>
		
		<div class="item-4 l">
			<span class="c-4d555d">操作</span>
		</div>
	</div>
	<textarea class="storageCart" style="display:none">		[
					{"goods_id":"214","type":"1","type_id":"113","status":"1","price":"348.00","ios_price":"348.00","service_lifetime":0,"open_discount":"1","discount_start_time":"1497456000","discount_end_time":"1497456000","discount_price":"0.00","discount_type":"0","code_white_list":10001,"using_discount":false,"pay_price":"348.00","code":0}
			,			
					{"goods_id":"282","type":"1","type_id":"121","status":"1","price":"199.00","ios_price":"198.00","service_lifetime":160,"open_discount":"0","discount_start_time":"1500393600","discount_end_time":"1500393600","discount_price":"0.00","discount_type":"0","code_white_list":10001,"using_discount":false,"pay_price":"199.00","code":0}
						
				]
	</textarea>
	<div id="js-cart-body-table" class="cart-body-table">
	            @if($carts)
	            @foreach($carts as $cart)
	             
				<div class="item clearfix js-item-cart js-each-113" data-type="1" data-typeid="113" data-goodsid="214" data-price="348.00">
			
			<div class="item-2 clearfix">
				<a href="http://coding.imooc.com/class/113.html" target="_blank" class="img-box l">
					<img src="/{{$cart->options->pic}}" width="160" height="90">
				</a>
				<dl class="l has-package">
					<a href="http://coding.imooc.com/class/113.html" target="_blank"><dt>{{$cart->name}}</dt></a>
										<!-- 组合套餐 -->
					
				</dl>
			</div>
			
			<div class="item-3">
				<div class="price clearfix">
					<em>￥</em>
					<span>{{$cart->price}}</span>
				</div>
			</div>
			
			<div class="item-4">
				<i class="js-close-cart close"><a href="/delCart/{{$cart->rowId}}"><img src="/homes/images/delete.png" alt=""></a></i>
			</div>
		</div>
		@endforeach
	    @endif 			
				<div id="Anchor"></div>
		<div class="cart-body-bot js-cart-body-bot">
			<div class="clearfix cart-body-bot-box">
				
				
				<div class="right">
					<ul class="clearfix">
						<li class="li-2">
							<div class="topdiv">总计金额：</div>
							<div class="price price-red clearfix">
								<em>￥</em>
								<span class="jsAltogether">{{$total}}</span>
							</div>
						</li>
						
						<li class="li-3">
							<span class="btn js-go-confrim">去结算</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>

@else
<div id="cartBody" class="cart-body">
		<p class="notdata">购物车内空空如也</p>
	</div>
@endif

</div>
@endsection
